<?php

namespace App\Controller;

use App\Repository\BoxRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupportController extends AbstractController
{
    public function __construct(BoxRepository $boxRepository)
    {
        $this->boxRepository = $boxRepository;
    }

    /**
     * @Route("/support", name="app_support")
     */
    public function index(): Response
    {
        $boxs = $this->boxRepository->findAll();

        return $this->render('support/index.html.twig', [
            'boxs' => $boxs
        ]);
    }
}
