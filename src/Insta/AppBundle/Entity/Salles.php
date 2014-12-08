<?php

namespace Insta\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salles
 *
 * @ORM\Table(name="salles", indexes={@ORM\Index(name="materiel_id", columns={"materiel_id"}), @ORM\Index(name="status_id", columns={"status_id"}), @ORM\Index(name="localisation_name", columns={"localisation_id"})})
 * @ORM\Entity
 */
class Salles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="localisation_id", type="integer", nullable=false)
     */
    private $localisationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="libelle", type="integer", nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=false)
     */
    private $nbPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_poste", type="integer", nullable=false)
     */
    private $nbPoste;

    /**
     * @var integer
     *
     * @ORM\Column(name="materiel_id", type="integer", nullable=false)
     */
    private $materielId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     */
    private $statusId;



    /**
     * Set localisationId
     *
     * @param integer $localisationId
     * @return Salles
     */
    public function setLocalisationId($localisationId)
    {
        $this->localisationId = $localisationId;

        return $this;
    }

    /**
     * Get localisationId
     *
     * @return integer 
     */
    public function getLocalisationId()
    {
        return $this->localisationId;
    }

    /**
     * Set libelle
     *
     * @param integer $libelle
     * @return Salles
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return integer 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return Salles
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return integer 
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set nbPoste
     *
     * @param integer $nbPoste
     * @return Salles
     */
    public function setNbPoste($nbPoste)
    {
        $this->nbPoste = $nbPoste;

        return $this;
    }

    /**
     * Get nbPoste
     *
     * @return integer 
     */
    public function getNbPoste()
    {
        return $this->nbPoste;
    }

    /**
     * Set materielId
     *
     * @param integer $materielId
     * @return Salles
     */
    public function setMaterielId($materielId)
    {
        $this->materielId = $materielId;

        return $this;
    }

    /**
     * Get materielId
     *
     * @return integer 
     */
    public function getMaterielId()
    {
        return $this->materielId;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return Salles
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
