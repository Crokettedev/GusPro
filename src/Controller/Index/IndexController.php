<?php

namespace App\Controller\Index;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 */
class IndexController extends AbstractController
{
	
	/** 
	 * @Route("/", name="home")
	 * @return Response
	 */

	//Methode index va servir a afiicher la page d'acceuil
	public function index(): Response{
		
		return $this->render(('Index/index.html.twig'));
	}
}


