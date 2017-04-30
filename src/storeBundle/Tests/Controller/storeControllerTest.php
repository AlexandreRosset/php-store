<?php

namespace storeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class storeControllerTest extends WebTestCase
{
    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Accueil');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Login');
    }

    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Register');
    }

    public function testPanier()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Panier');
    }

    public function testDetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Detail');
    }

    public function testCheckout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Checkout');
    }

    public function testPaye()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Paye');
    }

    public function testCheckcommande()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CheckCommande');
    }

    public function testAddproduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddProduit');
    }

    public function testModifproduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifProduit');
    }

    public function testRemoveproduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/RemoveProduit');
    }

    public function testLoginadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/LoginAdmin');
    }

    public function testRegisteradmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/RegisterAdmin');
    }

}
