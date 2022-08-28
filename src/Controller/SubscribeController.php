<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SubscribeType;
use App\Repository\BoxRepository;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SubscribeController extends AbstractController {

    /**
     * @var ObjectManager
     */
 
    private $em;

    public function __construct(EntityManagerInterface $em, BoxRepository $boxRepository)
    {
        $this->em = $em;
        $this->boxRepository = $boxRepository;
    }

    /**
     * @Route("/subscribe", name="subscribe.news")
     */

    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $newLogin = new User();
        $form = $this->createForm(SubscribeType::class, $newLogin);
        $newLogin->setRole('user');
        $form->handleRequest($request);
        $boxRepository = $this->boxRepository->findAll();

        if($form->isSubmitted() && $form->isValid()) {
            if($form->get('plainPassword')->getData() == $form->get('confirmPassword')->getData()){
                $newLogin->setPassword(
                    $passwordEncoder->encodePassword(
                        $newLogin,
                        $form->get('plainPassword')->getData()
                    )
                
            );
            
            
            $this->em->persist($newLogin);
            $this->em->flush();
            $this->addFlash('success', 'Compte crée avec succées');
            return $this->redirectToRoute('app_login');
        } else {
            $this->addFlash('danger', 'Les mots de passe ne corresponde pas');
            return $this->redirectToRoute('subscribe.news');
        }
        }

        return $this->render('subscribe/new.html.twig', [
            'newLogin' => $newLogin,
            'boxs' => $boxRepository,
            'form' => $form->createView() 
        ]);
    }
}
