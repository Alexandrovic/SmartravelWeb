<?php

namespace Travel\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateReservation;

    /**
     * @var boolean
     */
    private $payement;

    /**
     * @var \Travel\AnnonceBundle\Entity\Facture
     */
    private $factureReservation;

    /**
     * @var \Travel\AnnonceBundle\Entity\Voyageur
     */
    private $voyageurReservation;

    /**
     * @var \Travel\AnnonceBundle\Entity\Voyage
     */
    private $voyageReservation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime 
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set payement
     *
     * @param boolean $payement
     * @return Reservation
     */
    public function setPayement($payement)
    {
        $this->payement = $payement;

        return $this;
    }

    /**
     * Get payement
     *
     * @return boolean 
     */
    public function getPayement()
    {
        return $this->payement;
    }

    /**
     * Set factureReservation
     *
     * @param \Travel\AnnonceBundle\Entity\Facture $factureReservation
     * @return Reservation
     */
    public function setFactureReservation(\Travel\AnnonceBundle\Entity\Facture $factureReservation = null)
    {
        $this->factureReservation = $factureReservation;

        return $this;
    }

    /**
     * Get factureReservation
     *
     * @return \Travel\AnnonceBundle\Entity\Facture 
     */
    public function getFactureReservation()
    {
        return $this->factureReservation;
    }

    /**
     * Set voyageurReservation
     *
     * @param \Travel\AnnonceBundle\Entity\Voyageur $voyageurReservation
     * @return Reservation
     */
    public function setVoyageurReservation(\Travel\AnnonceBundle\Entity\Voyageur $voyageurReservation = null)
    {
        $this->voyageurReservation = $voyageurReservation;

        return $this;
    }

    /**
     * Get voyageurReservation
     *
     * @return \Travel\AnnonceBundle\Entity\Voyageur 
     */
    public function getVoyageurReservation()
    {
        return $this->voyageurReservation;
    }

    /**
     * Set voyageReservation
     *
     * @param \Travel\AnnonceBundle\Entity\Voyage $voyageReservation
     * @return Reservation
     */
    public function setVoyageReservation(\Travel\AnnonceBundle\Entity\Voyage $voyageReservation = null)
    {
        $this->voyageReservation = $voyageReservation;

        return $this;
    }

    /**
     * Get voyageReservation
     *
     * @return \Travel\AnnonceBundle\Entity\Voyage 
     */
    public function getVoyageReservation()
    {
        return $this->voyageReservation;
    }
}
