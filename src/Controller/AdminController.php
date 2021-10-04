<?php

namespace App\Controller;

use App\Entity\EmotioneleVraag;
use App\Form\EmotioneleVragenType;
use App\Repository\EmotioneleVraagRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(EmotioneleVraagRepository $emotioneleVraagRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            "aantalVragen" => $emotioneleVraagRepository->findAll()
        ]);
    }

    /**
     * @Route("/admin/vragen", name="add_questions")
     */
    public function addQuestions(Request $request): Response
    {

        $em = $this->getDoctrine()->getManager();

        $emotioneleVraag = new EmotioneleVraag();
        $form = $this->createForm(EmotioneleVragenType::class, $emotioneleVraag);

        $form->handleRequest($request);


        if ($form->isSubmitted()) {


            $em->persist($emotioneleVraag);
            $em->flush($emotioneleVraag);

            return $this->redirectToRoute("admin");

        }

        return $this->render('admin/createQuestions.html.twig', [
            "form" => $form->createView()
        ]);
    }
}
