<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/client')]
class ClientController extends AbstractController
{
    #[Route('/details/{id}', name: 'app_client')]
    public function index(ClientRepository $repo, $id): Response
    {
        $client = $repo->find($id);
        // dd($client);

        return $this->render('client/index.html.twig', [
            'client' => $client,
        ]);
    }

    #[Route('/details2/{client}', name: 'app_client2')]
    public function index2(Client $client): Response
    {
        // $client = $repo->find($id);
        // dd($client);

        return $this->render('client/index.html.twig', [
            'client' => $client,
        ]);
    }
}
