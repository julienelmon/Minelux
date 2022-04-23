<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\BoxRepository;
use App\Repository\ItemRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    public function __construct(CategoryRepository $categoryRepository, BoxRepository $boxRepository, ItemRepository $itemRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->boxRepository = $boxRepository;
        $this->itemRepository = $itemRepository;
    }

    /**
     * @Route("/shop", name="app_shop")
     * @Route("/category/{categorySelect}", name="app_category")
     */
    public function index(Category $categorySelect = null): Response
    {   
        
        $categorys = $this->categoryRepository->findAll();
        $boxRepository = $this->boxRepository->findAll();
        return $this->render('shop/index.html.twig', [
            'boxs' => $boxRepository,
            'categorys' => $categorys,
            'categorySelect' => $categorySelect,
        ]);
    }  
}
