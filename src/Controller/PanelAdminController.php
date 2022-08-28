<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Box;
use App\Repository\UserRepository;
use App\Repository\BoxRepository;
use App\Form\BoxType;
use App\Service\FileUploader;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelAdminController extends AbstractController
{

    /**
     * @var ObjectManager
     */

    private $em;

    public function __construct(BoxRepository $boxRepository, EntityManagerInterface $em, UserRepository $userRepository)
    {
        $this->boxRepository = $boxRepository;
        $this->userRepository = $userRepository;
        $this->em = $em;
    }

    /**
     * @Route("/panel_admin", name="panel_admin")
     */
    public function index(): Response 
    {   
        $boxs = $this->boxRepository->findAll();
        return $this->render('admin/admin.html.twig', [
            'boxs' => $boxs
        ]);
    }

    /**
     * @Route("/control_box", name="control_box")
     */

     public function controlBox(): Response
     {
        
        $boxs = $this->boxRepository->findAll();
        
        return $this->render('admin/controlbox.html.twig', [
            'boxs' => $boxs
        ]);
     }

     /**
      * @Route("/config_box/{box}", name="config_box")
      * @param Box $box
      * @param Request $request
      * @param FileUploader $file_uploader
      * @return \Symfony\Component\HttpFoundation\Response
      */

     public function configBox(Request $request, Box $box, FileUploader $file_uploader)
     {
        $form = $this->createForm(BoxType::class, $box);
        $form->handleRequest($request);
        
        $boxs = $this->boxRepository->findAll();

        if($form->isSubmitted() && $form->isValid()) {
            
            $file = $form->get('link_img')->getData();
            
        
            if($file)
            {
                $file_name = $file_uploader->upload($file);
                if(null !== $file_name)
                {
                    $full_path = 'images/index/'.$file_name;
                    $box->setLinkImg($full_path);
                }
            }
            $this->em->flush();
            $this->addFlash('success', 'Modification effectué');
            return $this->redirectToRoute('control_box');
        }

        return $this->render('admin/configbox.html.twig', [
            'form' => $form->createView(),
            'boxs' => $boxs,
            'box' => $box
        ]);
     }

     /**
      * @param User $users
      * @Route("/config_user", name="config_user")
      */

     public function configUser()
     {
        $boxs = $this->boxRepository->findAll();
        $users = new User();
        $users = $this->userRepository->findAll();
        return $this->render('admin/configuser.html.twig', [
            'boxs' => $boxs,
            'users' => $users
        ]);
     }

     /**
      * @Route("/delete/{userId}", name="delete")
      */

      public function delete($userId)
      {
        $boxs = $this->boxRepository->findAll();
        $users = new User();
        $users = $this->userRepository->findAll();
        
        $this->userRepository->delete($userId);
        return $this->render('admin/configuser.html.twig', [
            'boxs' => $boxs,
            'users' => $users
        ]);    
      }
}

?>