<?php

namespace App\Controller\Inscription;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
class InscriptionController extends AbstractController
{

    /**
     * @Route("/Inscription", name="Inscription")
     * @return Response
     */
    public function index(): Response{

        return $this->render(('Inscription/index.html.twig'));
    }
}