<?php
// UserBundle/Entity/User.php

namespace Insta\AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  /**
    * @var integer
    *
    * @ORM\Column(name="promo_id", type="integer", nullable=false)
    */
  private $promoId;
  
  
  public function __construct() {
      parent::__construct();
      $this->promoId = 138;
  }
}

?>