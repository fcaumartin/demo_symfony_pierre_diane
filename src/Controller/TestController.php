<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Disc;
use App\Form\ClientType;
use App\Form\Client2Type;
use App\Repository\ArtistRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(ArtistRepository $repo): Response
    {

        return $this->render('test/index.html.twig', [
            'artists' => $repo->findAll(),
        ]);
    }

    #[Route('/disc/{disc}', name: 'app_disc`')]
    public function disc(Disc $disc): Response
    {

        return $this->render('test/disc.html.twig', [
            'disc' => $disc
        ]);
    }
}
