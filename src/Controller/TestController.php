<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Form\Client2Type;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        $client = new Client();

        $form = $this->createForm(Client2Type::class, $client);

        if ($form->isSubmitted()) {

            
            dd($form);
        }

        return $this->render('test/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
