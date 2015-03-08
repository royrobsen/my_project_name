<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 */
class Categories
{
    /**
     * @var string
     */
    private $catName;

    /**
     * @var integer
     */
    private $access;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set catName
     *
     * @param string $catName
     * @return Categories
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * Get catName
     *
     * @return string 
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return Categories
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
     * @return Categories
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $article;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \Acme\BlogBundle\Entity\Articles $article
     * @return Categories
     */
    public function addArticle(\Acme\BlogBundle\Entity\Articles $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Acme\BlogBundle\Entity\Articles $article
     */
    public function removeArticle(\Acme\BlogBundle\Entity\Articles $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
