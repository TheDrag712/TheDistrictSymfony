<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Knp\Component\Pager\PaginatorInterface;
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
     * Affiche la page d'accueil avec les catégories paginées.
     *
     * Cette méthode récupère les catégories de manière paginée (6 par page)
     * et les transmet au template Twig pour l'affichage.
     *
     * @param Request $request L'objet Request, qui contient les informations de la requête HTTP (notamment le numéro de page).
     * @param CategorieRepository $categorieRepo Le repository pour accéder aux données des catégories.
     * @param PaginatorInterface $paginator Le service de pagination.
     * @return Response L'objet Response, qui contient le HTML rendu de la page.
     */
    #[Route(path: '/', name:'home')]
    function index(Request $request, CategorieRepository $categorieRepo, PaginatorInterface $paginator): Response
    {
        // Crée une requête pour la pagination à partir de toutes les catégories.
        $query = $categorieRepo->createQueryBuilder('c')->getQuery();

        // Paginer les résultats : récupère le numéro de page depuis la requête, avec 1 comme valeur par défaut.
        // Affiche 6 éléments par page.
        $categories = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        // Rend le template 'home/index.html.twig' en lui passant les catégories paginées.
        return $this->render(view: 'home/index.html.twig', parameters: [
            'categories' => $categories
        ]);
    }
}