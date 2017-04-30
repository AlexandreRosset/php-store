<?php

namespace storeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;


class storeController extends Controller
{
    /**
     * @Route("/Accueil", name="Accueil")
     */
    public function AccueilAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $produitRepo = $em->getRepository("storeBundle:Produit");
        $produits = $produitRepo->findAll();
        return $this->render('storeBundle:store:accueil.html.twig', array('produits' => $produits));
    }

    /**
     * @Route("/Login")
     */
     public function loginAction(Request $request)
 {
     // If user is already authenticated, we redirect him to home page
     if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
         return $this->redirectToRoute('home');
     }

     // The service authentication_utils allows to get user name
     // and an error when the forms was already submitted but invalid
     $authenticationUtils = $this->get('security.authentication_utils');

     return $this->render('UserBundle:Security:login.html.twig', array(
         'last_username' => $authenticationUtils->getLastUsername(),
         'error'         => $authenticationUtils->getLastAuthenticationError(),
     ));
 }

    /**
     * @Route("/Register")
     */
    public function RegisterAction()
    {
        return $this->render('storeBundle:store:register.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Panier/{id}", name="panier")
     */
    public function PanierAction()
    {
        return $this->render('storeBundle:store:panier.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Detail/{id}", name="detail")
     */
    public function DetailAction($id)
    {
      $em = $this->getDoctrine()->getEntityManager();

      $produitRepo = $em->getRepository("storeBundle:Produit");
      $produit = $produitRepo->find($id);
        return $this->render('storeBundle:store:detail.html.twig', array("produit" => $produit));
    }

    /**
     * @Route("/Checkout")
     */
    public function CheckoutAction()
    {
        return $this->render('storeBundle:store:checkout.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Paye")
     */
    public function PayeAction()
    {
        return $this->render('storeBundle:store:paye.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/CheckCommande")
     */
    public function CheckCommandeAction()
    {
        return $this->render('storeBundle:store:check_commande.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/AddProduit")
     */
    public function AddProduitAction()
    {
        return $this->render('storeBundle:store:add_produit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ModifProduit")
     */
    public function ModifProduitAction()
    {
        return $this->render('storeBundle:store:modif_produit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/RemoveProduit")
     */
    public function RemoveProduitAction()
    {
        return $this->render('storeBundle:store:remove_produit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/LoginAdmin")
     */
    public function LoginAdminAction()
    {
        return $this->render('storeBundle:store:login_admin.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/RegisterAdmin")
     */
    public function RegisterAdminAction()
    {
        return $this->render('storeBundle:store:register_admin.html.twig', array(
            // ...
        ));
    }

}
