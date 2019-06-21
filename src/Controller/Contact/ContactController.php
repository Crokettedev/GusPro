<?php


namespace App\Controller\Contact;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
class ContactController extends AbstractController
{

    /**
     * @Route("/Contact", name="Contact")
     * @return Response
     */
    public function index(): Response
    {

        return $this->render(('Contact/index.html.twig'));
    }
}