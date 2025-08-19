<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PlatsController extends AbstractController
{

    #[Route(path: '/plats', name: 'plats.show')]
    function plats(Request $request): Response{

    }

    #[Route(path: '/plats/{categorie_id}', name: 'plats_categorie.show')]
    function plat_categorie(Request $request): Response{
        
    }
}
