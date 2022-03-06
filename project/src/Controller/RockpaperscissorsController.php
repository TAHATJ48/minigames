<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RockpaperscissorsController extends AbstractController
{
    #[Route('/rockpaperscissors', name: 'rockpaperscissors')]
    public function index(): Response
    {
        return $this->render('rockpaperscissors.html.twig', [
            'controller_name' => 'RockpaperscissorsController',
        ]);
    }
}
