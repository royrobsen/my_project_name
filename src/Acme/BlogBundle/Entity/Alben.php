<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alben
 */
class Alben
{
    /**
     * @var string
     */
    private $albumName;

    /**
     * @var integer
     */
    private $access;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set albumName
     *
     * @param string $albumName
     * @return Alben
     */
    public function setAlbumName($albumName)
    {
        $this->albumName = $albumName;

        return $this;
    }

    /**
     * Get albumName
     *
     * @return string 
     */
    public function getAlbumName()
    {
        return $this->albumName;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return Alben
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Alben
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Alben
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
