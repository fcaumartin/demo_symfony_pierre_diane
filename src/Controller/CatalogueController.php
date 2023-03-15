<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogueController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('catalogue/accueil.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/categories', name: 'app_categories')]
    public function categories(): Response
    {
        return $this->render('catalogue/categories.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/sous_categories', name: 'app_sous_categories')]
    public function sous_categories(): Response
    {
        return $this->render('catalogue/sous_categories.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/produits', name: 'app_produits')]
    public function produits(): Response
    {
        return $this->render('catalogue/produits.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }
}
