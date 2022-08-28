<?php

namespace App\Controller;

use App\Entity\Friend;
use App\Entity\User;
use App\Entity\Message;
use App\Service\WebsenderAPI;
use App\Repository\BoxRepository;
use App\Repository\UserRepository;
use App\Repository\FriendRepository;
use App\Repository\MessageRepository;



use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;

class HomeController extends AbstractController
{

    public function __construct(ManagerRegistry $doctrine, FriendRepository $friendRepository, BoxRepository $boxRepository, UserRepository $userRepository, Security $security, MessageRepository $messageRepository)
    {
        $this->boxRepository = $boxRepository;
        $this->userRepository = $userRepository;
        $this->friendRepository = $friendRepository;
        $this->messageRepository = $messageRepository;
        $this->security = $security;
        $this->doctrine = $doctrine;
    }
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {   
        $boxs = $this->boxRepository->findAll();
        return $this->render('home/home.html.twig', [
            'boxs' => $boxs
        ]);
    }

    /**
     * @Route("/ingame/{pseudo}", name="app_in_game")
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function refreshGameData($pseudo): Response
    {
        $user = $this->security->getUser();
        
        $line1 = [];
        $line2 = [];
        $line3 = [];
        $line4 = [];
        $wsr = new WebsenderAPI("127.0.0.1", "91390Julien=", '9876');
        if($wsr->connect()){
            $wsr->sendCommand("refreshdata " . $pseudo);
        }
        
        sleep(3);

        $boxs = $this->boxRepository->findAll();
        return $this->render('ingame/index.html.twig', [
            'boxs' => $boxs,
            'lines1' => $line1,
            'lines2' => $line2,
            'lines3' => $line3,
            'lines4' => $line4,
        ]);
    }

    /**
     * @Route("/message", name="app_message")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function messagePage(Request $request): Response
    {
        $listFriend = new Friend();
        $listFriend = $this->friendRepository->findAllFriend($this->security->getUser()->getId());

        $boxs = $this->boxRepository->findAll();

        return $this->render('message/index.html.twig', [
            'boxs' => $boxs,
            'listfriends' => $listFriend,
            'iduser' => $this->security->getUser()->getId(),
        ]);
    }

    /**
     * @Route("/openConv/{idfriend}", name="app_openConv")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function openConversation($idfriend): Response
    {
        $boxs = $this->boxRepository->findAll();
        
        $conversation1 = $this->messageRepository->findByTwoId1($this->security->getUser()->getId(), $idfriend);
        $conversation2 = $this->messageRepository->findByTwoId2($this->security->getUser()->getId(), $idfriend);

        //dd($conversation1, $conversation2);
        
        return $this->render('message/openconv.html.twig', [
            'idfriend' => $idfriend,
            'boxs' => $boxs,
            'conversations1' => $conversation1,
            'conversations2' => $conversation2,
        ]);
    }

    /** 
     * @Route("/sendMessage/{idfriend}", name="app_sendMessage")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function sendMessage($idfriend, Request $request): Response
    {
        $idFriend = new User;
        $idFriend = $this->userRepository->findOneById($idfriend);
        
        $text = $request->get('text');
        $entityManager = $this->doctrine->getManager();
        $message = new Message();
        $message->setText($text);
        $message->setIsRead(1);
        $message->setFromUser($this->security->getUser()->getId());
        $message->setToUser($idFriend);

        $entityManager->persist($message);
        $entityManager->flush();
        
        $conversations1 = $this->messageRepository->findByTwoId1($this->security->getUser()->getId(), $idfriend);
        $conversations2 = $this->messageRepository->findByTwoId2($this->security->getUser()->getId(), $idfriend);

        $boxs = $this->boxRepository->findAll();
        //dd($conversation1, $conversation2);
        return $this->render('message/openconv.html.twig', [
            'idfriend' => $idfriend,
            'boxs' => $boxs,
            'conversations1' => $conversations1,
            'conversations2' => $conversations2,
        ]);
    }

    /**
     * @Route("/listfriend", name="app_listfriend")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function listFriend(Request $request): Response
    {
        $nameById = [];
        $boxs = $this->boxRepository->findAll();
        $listAdds = array();
        $listToAdds = $this->friendRepository->findById($this->security->getUser()->getId());
        foreach($listToAdds as &$listToAdd){
            $listAdds[$listToAdd->getId()] = array("name" => $listToAdd->getPlayer1(), "id" => $listToAdd->getId(),); 
        }
        return $this->render('listfriend/index.html.twig', [
            'boxs' => $boxs,
            'listadds' => $listAdds,
            'nameByIds' => $nameById,
        ]);
    }

    /**
     * @param Request $request
     * @Route("/friendadd", name="app_friendadd")
     */

    public function friendAdded(Request $request)
    {
        $user = new User();
        $user = $this->userRepository->findOneByPseudo($request->get('pseudo_added'));
        if(!empty($user)){
            $entityManager = $this->doctrine->getManager();
            $friend = new Friend();
            $friend->setPlayer1($this->security->getUser()->getId());
            $friend->setPlayer2($user);
            $friend->setIsValided(false);

            $entityManager->persist($friend);
            $entityManager->flush();
        } else {
            $boxs = $this->boxRepository->findAll();
            $this->addFlash('danger', 'Utilisateur introuvable');
            return $this->render('listfriend/index.html.twig', [
                'boxs' => $boxs,
            ]);
        }
        $nameById = [];
        $listAdds = array();
        $listToAdds = $this->friendRepository->findById($this->security->getUser()->getId());
        foreach($listToAdds as &$listToAdd){
            $listAdds[$listToAdd->getId()] = array("name" => $listToAdd->getPlayer1(), "id" => $listToAdd->getId()); 
        }
        
        $boxs = $this->boxRepository->findAll();
        return $this->render('listfriend/index.html.twig', [
            'boxs' => $boxs,
            'listadds' => $listAdds,
            'nameByIds' => $nameById,
        ]);
    }

    /**
     * @Route("/acceptfriend/{idFriend}", name="app_acceptfriend")
     */

    public function acceptFriend($idFriend)
    {
        $entityManager = $this->doctrine->getManager();
        $friendAccept = $entityManager->getRepository(Friend::class)->find($idFriend);
        
        if(!$friendAccept) {
            throw $this->createNotFoundException(
                'No product found for id'.$idFriend
            );
        }

        $friendAccept->setIsValided(1);
        $entityManager->flush();

        return $this->redirectToRoute('app_listfriend');
}   }
