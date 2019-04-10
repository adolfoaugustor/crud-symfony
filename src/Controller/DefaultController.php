<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(SessionInterface $session)
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @param SessionInterface $session
     * @Route("/pegar-sessao")
     *
     */
    public function pegarSessao(SessionInterface $session)
    {
        $session->remove('frase');
        echo $session->get('frase', 'noooooooo');
        exit;
    }
}
