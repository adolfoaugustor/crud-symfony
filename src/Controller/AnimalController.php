<?php

namespace App\Controller;

use App\Entity\Animal;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends Controller
{
    /**
     * @Route("/animal", name="listar_animals")
     * @Template("animal/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $animal = $em->getRepository(Animal::class)->findAll();
        return [
            'animal' => $animal
        ];
    }
}
