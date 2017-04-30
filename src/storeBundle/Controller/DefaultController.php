<?php

namespace storeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

          $em = $this->getDoctrine()->getEntityManager();

          $produitRepo = $em->getRepository("storeBundle:Produit");
          $produits = $produitRepo->findAll();
        return $this->render('storeBundle:store:accueil.html.twig', array('produits' => $produits));
    }
}
