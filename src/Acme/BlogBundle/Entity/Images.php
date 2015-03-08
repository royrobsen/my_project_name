<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Images
 */
class Images
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $access;

    /**
     * @var integer
     */
    private $album;

    /**
     * @var integer
     */
    private $fotoid;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     * @return Images
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Images
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
     * Set access
     *
     * @param integer $access
     * @return Images
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
     * Set album
     *
     * @param integer $album
     * @return Images
     */
    public function setAlbum($album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return integer 
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set fotoid
     *
     * @param integer $fotoid
     * @return Images
     */
    public function setFotoid($fotoid)
    {
        $this->fotoid = $fotoid;

        return $this;
    }

    /**
     * Get fotoid
     *
     * @return integer 
     */
    public function getFotoid()
    {
        return $this->fotoid;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Images
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
