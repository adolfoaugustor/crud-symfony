<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="list_product")
     * @Template("product/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->findAll();

        return [
           'products' => $product
        ];
    }

    /**
     * @param Request $request
     *
     * @Route("product/create", name="register_product")
     * @Template("product/create.html.twig")
     */
    public function create(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($product);
            $em->flush();

            //$this->get('session')->getFlashBag()->set('success',"Product foi salvo com sucesso!");
            $this->addFlash('success', 'Product add success!');
            return $this->redirectToRoute('list_product');
        }

        return [
            'form' => $form->createView()
        ];
    }

    /**
     * @param Request $request
     *
     * @Route("product/edit/{id}", name="edit_product")
     * @Template("product/update.html.twig")
     */
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $em->persist($product);
            $em->flush();

            $this->get('session')->getFlashBag()->set('success',"Product changed success!");
            return $this->redirectToRoute('list_product');
        }

        return [
            'product' => $product,
            'form' => $form->createView()
        ];
    }

    /**
     * @param Request $request
     * @param $id
     *
     * @Route("product/view/{id}", name="view_product")
     * @Template("product/view.html.twig")
     */
    public function View(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);

        return [
            'product' => $product
        ]   ;
    }

    /**
     * @param Request $request
     * @param $id
     *
     * @Route("product/delete/{id}", name="delete_product")
     */
    public function delete(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);

        if (!$product){
            $message = "Produto não encontrado";
            $type = "warning";
        }else{
            $em->remove($product);
            $em->flush();
            $type = "success";
            $message = "Product deleted success";
        }

        $this->get('session')->getFlashBag()->set($type, $message);
        return $this->redirectToRoute('list_product');

    }
}

















