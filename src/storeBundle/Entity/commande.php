<?php

namespace storeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="storeBundle\Repository\commandeRepository")
 */
class commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAcheteur", type="string", length=255)
     */
    private $nomAcheteur;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="paye", type="boolean")
     */
    private $paye;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomAcheteur
     *
     * @param string $nomAcheteur
     *
     * @return commande
     */
    public function setNomAcheteur($nomAcheteur)
    {
        $this->nomAcheteur = $nomAcheteur;

        return $this;
    }

    /**
     * Get nomAcheteur
     *
     * @return string
     */
    public function getNomAcheteur()
    {
        return $this->nomAcheteur;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return commande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set paye
     *
     * @param boolean $paye
     *
     * @return commande
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return bool
     */
    public function getPaye()
    {
        return $this->paye;
    }
}

