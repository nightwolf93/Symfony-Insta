<?php

namespace Insta\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seances
 *
 * @ORM\Table(name="seances", indexes={@ORM\Index(name="professeur_id", columns={"professeur_id"}), @ORM\Index(name="salle_id", columns={"salle_id"})})
 * @ORM\Entity
 */
class Seances
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="professeur_id", type="integer", nullable=false)
     */
    private $professeurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="promo_id", type="integer", nullable=false)
     */
    private $promoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="salle_id", type="integer", nullable=false)
     */
    private $salleId;



    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Seances
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Seances
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Seances
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Seances
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set professeurId
     *
     * @param integer $professeurId
     * @return Seances
     */
    public function setProfesseurId($professeurId)
    {
        $this->professeurId = $professeurId;

        return $this;
    }

    /**
     * Get professeurId
     *
     * @return integer 
     */
    public function getProfesseurId()
    {
        return $this->professeurId;
    }

    /**
     * Set promoId
     *
     * @param integer $promoId
     * @return Seances
     */
    public function setPromoId($promoId)
    {
        $this->promoId = $promoId;

        return $this;
    }

    /**
     * Get promoId
     *
     * @return integer 
     */
    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * Set salleId
     *
     * @param integer $salleId
     * @return Seances
     */
    public function setSalleId($salleId)
    {
        $this->salleId = $salleId;

        return $this;
    }

    /**
     * Get salleId
     *
     * @return integer 
     */
    public function getSalleId()
    {
        return $this->salleId;
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
