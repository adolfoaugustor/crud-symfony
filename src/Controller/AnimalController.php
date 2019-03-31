<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
     * @param Request $request
     * @param $id
     */
    public function view($id)
    {
        $em = $this->getDoctrine()->getManager();
        $animal = $em->getRepository(Animal::class)->find($id);
//        var_dump($animal);die;
        return [
            'animal' => $animal
        ];

    }

    /**
     * @Route("animal/cadastrar", name="cadastrar_animal")
     * @Template("animal/create.html.twig")
     */
    public function create(Request $request)
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal );
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();
            $this->addFlash('success', "Animal foi salvo com sucesso!");
            return $this->redirectToRoute('listar_animals');
        }

        return [
            'form' => $form->createView()
        ];
    }
}
