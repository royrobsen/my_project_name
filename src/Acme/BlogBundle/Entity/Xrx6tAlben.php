<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xrx6tAlben
 */
class Xrx6tAlben
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $bilderarray;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Xrx6tAlben
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set bilderarray
     *
     * @param string $bilderarray
     * @return Xrx6tAlben
     */
    public function setBilderarray($bilderarray)
    {
        $this->bilderarray = $bilderarray;

        return $this;
    }

    /**
     * Get bilderarray
     *
     * @return string 
     */
    public function getBilderarray()
    {
        return $this->bilderarray;
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
