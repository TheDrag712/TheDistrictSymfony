<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    #[Route(path: '/panier', name: 'panier.show')]
    function panier(Request $request): Response{
        
    }

    #[Route(path: '/panier/ajout/{id}', name: 'panier.add')]
    function ajout(Request $request): Response{
        
    }
}
