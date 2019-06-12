<?php

namespace App\Controller\Connexion;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 */
class PageConnexionController extends AbstractController
{
	
	/** 
	 * @Route("/Connexion", name="Connexion")
	 * @return Response
	 */

	//Methode index va servir a afiicher la page d'acceuil
	public function index(): Response{
		
		return $this->render(('Connexion/index.html.twig'));
	}

	/** 
	 * @Route("/Connexion", name="Connexion")
	 * @return Response
	 */

	//Methode index va servir a afiicher la page d'acceuil
	public function createAccount(): Response{
		
		return $this->render(('Connexion/index.html.twig'));
	}
}


