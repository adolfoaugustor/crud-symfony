<?php
/**
 * Created by PhpStorm.
 * User: massakito
 * Date: 24/11/18
 * Time: 09:31
 */

namespace App\Controller;

use App\Entity\Product;
use Doctrine\DBAL\Types\DecimalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/")
     */
    public function index()
    {
        return new Response(
            "<html><body><h1>Helow!</h1></body></body></html>"
        );
    }

    /**
     * @return Response
     *
     * @Route("show-message")
     */
    public function message()
    {
        return $this->render("hello/message.html.twig", [
            'message'=>"ola Hellow Word!"
        ]);

    }

    /**
     * @return Response
     *
     * @Route("create-product")
     */
    public function product()
    {
        $em = $this->getDoctrine()->getManager();

        $product = new Product();

        $product->setName("Tv Smart - Sansung")->setPrice(1200.00);

        $em->persist($product);
        $em->flush();

        return new Response("O product ". $product->getId() . " foi criado!" );
    }

    /**
     * @return Response
     *
     * @Route("form")
     */
    public function formulario(Request $request)
    {
        $product = new Product();

        $form = $this->createFormBuilder($product)
            ->add('name', TextType::class)
            ->add('price', TextType::class)
            ->add('send', SubmitType::class, [ 'label' => "Salvar" ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            return new Response("O formulário esta ok");
        }

        return $this->render( "hello/formulario.html.twig", [
            'message'=>"ola Hellow Word!",
            'form' =>$form->createView()
        ]);
    }
}