<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Contrôleur pour la page d'accueil.
 * Gère l'affichage des catégories principales sur la page d'accueil.
 */
final class HomeController extends AbstractController
{
    /**
     * Affiche la page d'accueil.
     *
     * Cette méthode récupère toutes les catégories de la base de données
     * et les transmet au template Twig pour l'affichage.
     *
     * @param Request $request L'objet Request, qui contient les informations de la requête HTTP.
     * @param CategorieRepository $categorie Le repository pour accéder aux données des catégories.
     * @return Response L'objet Response, qui contient le HTML rendu de la page.
     */
    #[Route(path: '/', name:'home')]
    function index(Request $request, CategorieRepository $categorie): Response
    {
        // Récupère toutes les entités Categorie via le repository.
        $categories = $categorie->findAll();

        // Rend le template 'home/index.html.twig' en lui passant les catégories.
        return $this->render(view: 'home/index.html.twig', parameters: [
            'categories' => $categories
        ]);
    }
}