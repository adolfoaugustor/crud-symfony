<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    /**
     * @Route("/session", name="session")
     * @param SessionInterface $session
     */
    public function index(SessionInterface $session)
    {
        $session->set('frase', "Luke i'm you Father");
        exit;
    }
}
