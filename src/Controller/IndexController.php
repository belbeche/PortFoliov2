<?php

namespace App\Controller;

use App\Entity\Projets;
use App\Form\ProjetsFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request): Response
    {

        $projets = new Projets();

        $form = $this->createForm(ProjetsFormType::class, $projets);

        $form->handleRequest($request);

        dump($request);

        return $this->render('index/index.html.twig', [
            'projet' => $projets,
        ]);
    }
}
