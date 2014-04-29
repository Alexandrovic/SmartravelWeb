<?php

namespace Travel\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoyageurHasVoyage
 */
class VoyageurHasVoyage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Travel\AnnonceBundle\Entity\Voyage
     */
    private $voyage;

    /**
     * @var \Travel\AnnonceBundle\Entity\Voyageur
     */
    private $voyageur;


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
     * Set voyage
     *
     * @param \Travel\AnnonceBundle\Entity\Voyage $voyage
     * @return VoyageurHasVoyage
     */
    public function setVoyage(\Travel\AnnonceBundle\Entity\Voyage $voyage = null)
    {
        $this->voyage = $voyage;

        return $this;
    }

    /**
     * Get voyage
     *
     * @return \Travel\AnnonceBundle\Entity\Voyage 
     */
    public function getVoyage()
    {
        return $this->voyage;
    }

    /**
     * Set voyageur
     *
     * @param \Travel\AnnonceBundle\Entity\Voyageur $voyageur
     * @return VoyageurHasVoyage
     */
    public function setVoyageur(\Travel\AnnonceBundle\Entity\Voyageur $voyageur = null)
    {
        $this->voyageur = $voyageur;

        return $this;
    }

    /**
     * Get voyageur
     *
     * @return \Travel\AnnonceBundle\Entity\Voyageur 
     */
    public function getVoyageur()
    {
        return $this->voyageur;
    }
}
