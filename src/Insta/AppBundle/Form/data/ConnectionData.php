<?php
namespace Insta\AppBundle\Form\Data;

use Symfony\Component\Validator\Constraints as Assert;

class ConnectionData {
    /**
     * @Assert\Type(type="Insta\AppBundle\Entity\Account")
     */
    protected $email;

    /**
     * @Assert\Type(type="Insta\AppBundle\Entity\Account")
     */
    protected $password;
    
    public function setemail(User $email)
    {
        $this->email = $email;
    }

    public function getemail()
    {
        return $this->email;
    }
    
    public function setpassword(User $password)
    {
        $this->password = $password;
    }

    public function getpassword()
    {
        return $this->password;
    }
    
}
