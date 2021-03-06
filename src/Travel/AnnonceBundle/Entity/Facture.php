<?php

namespace Travel\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 */
class Facture
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $sommeFacture;

    /**
     * @var \DateTime
     */
    private $datePayementFacture;

    /**
     * @var \Travel\AnnonceBundle\Entity\Reservation
     */
    private $idReservation;


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
     * Set sommeFacture
     *
     * @param float $sommeFacture
     * @return Facture
     */
    public function setSommeFacture($sommeFacture)
    {
        $this->sommeFacture = $sommeFacture;

        return $this;
    }

    /**
     * Get sommeFacture
     *
     * @return float 
     */
    public function getSommeFacture()
    {
        return $this->sommeFacture;
    }

    /**
     * Set datePayementFacture
     *
     * @param \DateTime $datePayementFacture
     * @return Facture
     */
    public function setDatePayementFacture($datePayementFacture)
    {
        $this->datePayementFacture = $datePayementFacture;

        return $this;
    }

    /**
     * Get datePayementFacture
     *
     * @return \DateTime 
     */
    public function getDatePayementFacture()
    {
        return $this->datePayementFacture;
    }

    /**
     * Set idReservation
     *
     * @param \Travel\AnnonceBundle\Entity\Reservation $idReservation
     * @return Facture
     */
    public function setIdReservation(\Travel\AnnonceBundle\Entity\Reservation $idReservation = null)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    /**
     * Get idReservation
     *
     * @return \Travel\AnnonceBundle\Entity\Reservation 
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }
}
