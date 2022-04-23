<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\VoteRepository;
use App\Repository\BoxRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoteController extends AbstractController
{
    
    public function __construct(VoteRepository $voteRepository, BoxRepository $boxRepository)
    {   
        $this->boxRepository = $boxRepository;
        $this->voteRepository = $voteRepository;
    }
    
    /**
     * @Route("/vote", name="app_vote")
     */
    public function index(): Response
    {
        $linkVote = $this->voteRepository->findAll();
        $boxs = $this->boxRepository->findAll();
        return $this->render('vote/index.html.twig', [
            'linkVotes' => $linkVote,
            'boxs' => $boxs
        ]);
    }

    /**
     * @Route("/voteconfirm", name="voteconfirm")
     */

    public function vote()
    {
        
    }
}
