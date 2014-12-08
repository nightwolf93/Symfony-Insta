<?php

namespace Insta\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Example
 */
class Example
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dfgs;


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
     * Set dfgs
     *
     * @param string $dfgs
     * @return Example
     */
    public function setDfgs($dfgs)
    {
        $this->dfgs = $dfgs;

        return $this;
    }

    /**
     * Get dfgs
     *
     * @return string 
     */
    public function getDfgs()
    {
        return $this->dfgs;
    }
}
