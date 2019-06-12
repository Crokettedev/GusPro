<?php

namespace App\Controller\Tarif;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 */
class TarifController extends AbstractController
{
	
	/** 
	 * @Route("/Tarif", name="Tarif")
	 * @return Response
	 */
	public function index(): Response{
		
		return $this->render(('Tarif/index.html.twig'));
	}
}