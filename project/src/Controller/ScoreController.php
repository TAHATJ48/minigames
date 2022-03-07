<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScoreController extends AbstractController
{
    #[Route('/score', name: 'sscore', methods: ['GET','POST'])]

    public function index(User $user): Response
    {
        $user->setSscore($user->getSscore() + 1);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('home');
    }

}
