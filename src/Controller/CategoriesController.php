<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/categories', name: 'categories')]
    public function index(): Response
    {
        $cate = $this->getDoctrine()->getRepository(Category::class);
        $category= $cate->findAll();

        return $this->render('categories/index.html.twig', [
            'controller_name' => 'CategoriesController',
            'categorys' => $category,
        ]);
    }
}
