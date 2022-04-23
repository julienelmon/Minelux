<?php

namespace App\Controller;

use App\Entity\Box;
use App\Entity\User;
use App\Repository\BoxRepository;
use App\Service\WebsenderAPI;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function __construct(BoxRepository $boxRepository, UserRepository $userRepository)
    {
        $this->boxRepository = $boxRepository;
        $this->userRepository = $userRepository;
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
        
        $wsr = new WebsenderAPI("127.0.0.1", "91390Julien=", '9876');
        if($wsr->connect()){
            $wsr->sendCommand("refreshdata " . $pseudo);
        }

        sleep(3);

        $boxs = $this->boxRepository->findAll();
        return $this->render('ingame/index.html.twig', [
            'boxs' => $boxs
        ]);
    }
}
