<?php

namespace App\Controller;

use App\Entity\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class ClientsController extends Controller
{
    /**
     * @Route("/clientes", name="listar_clients")
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

    /**
     * @param $id
     * @Route("/cliente/visualizar/{id}", name="view_client")
     * @Template("clients/view.html.twig")
     * @param Client $client
     * @return array
     */
    public function view(Client $client)
    {
        // VarDumper::dump($client);
        // exit;
        return [
          'clients' => $client
        ];

    }
}
