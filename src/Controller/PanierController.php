<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PanierController extends AbstractController
{
    #[Route(path: '/panier', name: 'panier.show')]
    function index(): Response{
        
    }

    #[Route(path: '/panier/ajout/{id}', name: 'panier.add')]
    function ajout(): Response{
        
    }
}
