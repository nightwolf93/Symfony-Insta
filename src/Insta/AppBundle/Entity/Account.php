<?php

namespace Insta\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="accounts")
 */
class Account
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $username;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $password;
    
    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $secret_question;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $secret_answer;

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
     * Set username
     *
     * @param string $username
     * @return Account
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set secret_question
     *
     * @param string $secretQuestion
     * @return Account
     */
    public function setSecretQuestion($secretQuestion)
    {
        $this->secret_question = $secretQuestion;

        return $this;
    }

    /**
     * Get secret_question
     *
     * @return string 
     */
    public function getSecretQuestion()
    {
        return $this->secret_question;
    }

    /**
     * Set secret_answer
     *
     * @param string $secretAnswer
     * @return Account
     */
    public function setSecretAnswer($secretAnswer)
    {
        $this->secret_answer = $secretAnswer;

        return $this;
    }

    /**
     * Get secret_answer
     *
     * @return string 
     */
    public function getSecretAnswer()
    {
        return $this->secret_answer;
    }
}
