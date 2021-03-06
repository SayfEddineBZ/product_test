<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProductBundle\Entity\Product;

class DefaultController extends Controller
{
    public function indexAction()
    {   $products = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findBy(array(), array('price' => 'ASC'));

        return $this->render('@ProductBundle/Default/index.html.twig', [
            'products' => $products,
        ]);

    }
}
