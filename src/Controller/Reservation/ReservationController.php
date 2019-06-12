<?php

namespace App\Controller\Reservation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 */
class ReservationController extends AbstractController
{
	
	/** 
	 * @Route("/Reservation", name="Reservation")
	 * @return Response
	 */
	public function index(): Response{
		
		return $this->render(('Reservation/index.html.twig'));
	}
}