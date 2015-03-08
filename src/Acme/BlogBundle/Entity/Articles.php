<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 */
class Articles
{
    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $articleContent;

    /**
     * @var integer
     */
    private $catId;

    /**
     * @var integer
     */
    private $access;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \DateTime
     */
    private $modifiedDate;

    /**
     * @var string
     */
    private $modifiedBy;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $aufstellung;

    /**
     * @var string
     */
    private $auswechselspieler;

    /**
     * @var string
     */
    private $wechsel;

    /**
     * @var boolean
     */
    private $papierkorb;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set headline
     *
     * @param string $headline
     * @return Articles
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set articleContent
     *
     * @param string $articleContent
     * @return Articles
     */
    public function setArticleContent($articleContent)
    {
        $this->articleContent = $articleContent;

        return $this;
    }

    /**
     * Get articleContent
     *
     * @return string 
     */
    public function getArticleContent()
    {
        return $this->articleContent;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     * @return Articles
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return Articles
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Articles
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
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Articles
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set modifiedDate
     *
     * @param \DateTime $modifiedDate
     * @return Articles
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return \DateTime 
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set modifiedBy
     *
     * @param string $modifiedBy
     * @return Articles
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return string 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Articles
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Articles
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set aufstellung
     *
     * @param string $aufstellung
     * @return Articles
     */
    public function setAufstellung($aufstellung)
    {
        $this->aufstellung = $aufstellung;

        return $this;
    }

    /**
     * Get aufstellung
     *
     * @return string 
     */
    public function getAufstellung()
    {
        return $this->aufstellung;
    }

    /**
     * Set auswechselspieler
     *
     * @param string $auswechselspieler
     * @return Articles
     */
    public function setAuswechselspieler($auswechselspieler)
    {
        $this->auswechselspieler = $auswechselspieler;

        return $this;
    }

    /**
     * Get auswechselspieler
     *
     * @return string 
     */
    public function getAuswechselspieler()
    {
        return $this->auswechselspieler;
    }

    /**
     * Set wechsel
     *
     * @param string $wechsel
     * @return Articles
     */
    public function setWechsel($wechsel)
    {
        $this->wechsel = $wechsel;

        return $this;
    }

    /**
     * Get wechsel
     *
     * @return string 
     */
    public function getWechsel()
    {
        return $this->wechsel;
    }

    /**
     * Set papierkorb
     *
     * @param boolean $papierkorb
     * @return Articles
     */
    public function setPapierkorb($papierkorb)
    {
        $this->papierkorb = $papierkorb;

        return $this;
    }

    /**
     * Get papierkorb
     *
     * @return boolean 
     */
    public function getPapierkorb()
    {
        return $this->papierkorb;
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
     * @var \Acme\BlogBundle\Entity\Categories
     */
    private $category;


    /**
     * Set category
     *
     * @param \Acme\BlogBundle\Entity\Categories $category
     * @return Articles
     */
    public function setCategory(\Acme\BlogBundle\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Acme\BlogBundle\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Acme\BlogBundle\Entity\Users
     */
    private $author;


    /**
     * Set author
     *
     * @param \Acme\BlogBundle\Entity\Users $author
     * @return Articles
     */
    public function setAuthor(\Acme\BlogBundle\Entity\Users $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Acme\BlogBundle\Entity\Users 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
