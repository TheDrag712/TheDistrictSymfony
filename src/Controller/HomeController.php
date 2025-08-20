<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route(path: '/', name:'home')]
    function index(Request $request, CategorieRepository $categorie): Response
    {
        $categories = $categorie->findAll();
        return $this->render(view: 'home/index.html.twig', parameters: [
            'categories' => $categories
        ]);
    }
}