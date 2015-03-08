<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teamcash
 */
class Teamcash
{
    /**
     * @var integer
     */
    private $userid;

    /**
     * @var float
     */
    private $value;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userid
     *
     * @param integer $userid
     * @return Teamcash
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
     * Set value
     *
     * @param float $value
     * @return Teamcash
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
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
