<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pwtoken
 */
class Pwtoken
{
    /**
     * @var integer
     */
    private $userid;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var boolean
     */
    private $used;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userid
     *
     * @param integer $userid
     * @return Pwtoken
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Pwtoken
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Pwtoken
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set used
     *
     * @param boolean $used
     * @return Pwtoken
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return boolean 
     */
    public function getUsed()
    {
        return $this->used;
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
