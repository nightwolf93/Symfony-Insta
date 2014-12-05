<?php

namespace Insta\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuteurs
 *
 * @ORM\Table(name="tuteurs")
 * @ORM\Entity
 */
class Tuteurs
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="entreprise_id", type="integer", nullable=false)
     */
    private $entrepriseId;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;


}
