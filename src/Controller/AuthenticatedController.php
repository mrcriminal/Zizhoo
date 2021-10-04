<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthenticatedController extends AbstractController
{
    /**
     * @Route("/vragen", name="authenticated")
     */
    public function index(): Response
    {
        return $this->render('authenticated/index.html.twig', [
            'controller_name' => 'AuthenticatedController',
        ]);
    }
}
