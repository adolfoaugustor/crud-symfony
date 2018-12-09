<?php

namespace App\Controller;

use App\Entity\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ClientsController extends Controller
{
    /**
     * @Route("/clients", name="listar_clients")
     * @Template("clients/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $clients = $em->getRepository(Client::class)->findAll();
        return [
            'clients' => $clients
        ];
    }
}
