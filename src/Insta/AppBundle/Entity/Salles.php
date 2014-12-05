<?php

namespace Insta\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salles
 *
 * @ORM\Table(name="salles", indexes={@ORM\Index(name="localisation_name", columns={"localisation_id"})})
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


}
