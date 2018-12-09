<?php

namespace App\Controller;

use App\Entity\Animal;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

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

    /**
     * @Route("/animal/visualizar/{id}", name="view_animal")
     * @Template("animal/view.html.twig")
     * @param Animal $animal
     * @return array
     */
    public function view(Animal $animal)
    {
//         VarDumper::dump($animal);
//         exit;
        return [
            'animal' => $animal
        ];

    }
}
