<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="public")
     * @Route("/index");
     */
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            "hello" => "Selamin Aleykum"
        ]);
    }
}