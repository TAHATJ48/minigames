<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PenduController extends AbstractController
{

    #[Route('/pendu', name: 'pendu')]
    public function index(): Response
    {
        return $this->render('pendu/pendu.html.twig', [
            'controller_name' => 'PenduController',
        ]);
    }
}
