<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * Set users
     *
     * @param \Acme\BlogBundle\Entity\Users $author
     * @return Articles
     */
 public function setAuthor(\Acme\BlogBundle\Entity\Users $author = null)    {
     
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
    
    /**
     * @var \Acme\BlogBundle\Entity\Status
     */
    private $state;


    /**
     * Set state
     *
     * @param \Acme\BlogBundle\Entity\Status $state
     * @return Articles
     */
    public function setState(\Acme\BlogBundle\Entity\Status $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Acme\BlogBundle\Entity\Status 
     */
    public function getState()
    {
        return $this->state;
    }
   
    /**
     * @var integer
     */
    private $aufstellungId;


    /**
     * Set aufstellungId
     *
     * @param integer $aufstellungId
     * @return Articles
     */
    public function setAufstellungId($aufstellungId)
    {
        $this->aufstellungId = $aufstellungId;

        return $this;
    }

    /**
     * Get aufstellungId
     *
     * @return integer 
     */
    public function getAufstellungId()
    {
        return $this->aufstellungId;
    }
    /**
     * @var \Acme\BlogBundle\Entity\Aufstellung
     * @Assert\Type(type="\Acme\BlogBundle\Entity\Aufstellung")
     * @Assert\Valid()
     */
    private $aufgestellt;
    
    /**
     * Set aufgestellt
     *
     * @param \Acme\BlogBundle\Entity\Aufstellung $aufgestellt
     * @return Articles
     */
    public function setAufgestellt(\Acme\BlogBundle\Entity\Aufstellung $aufgestellt = null)
    {
        $this->aufgestellt = $aufgestellt;

        return $this;
    }

    /**
     * Get aufgestellt
     *
     * @return \Acme\BlogBundle\Entity\Aufstellung 
     */
    public function getAufgestellt()
    {
        return $this->aufgestellt;
    }
   
    
    /**
     * @var \Acme\BlogBundle\Entity\UserGroups
     */
    private $group;


    /**
     * Set group
     *
     * @param \Acme\BlogBundle\Entity\UserGroups $group
     * @return Articles
     */
    public function setGroup(\Acme\BlogBundle\Entity\UserGroups $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Acme\BlogBundle\Entity\UserGroups 
     */
    public function getGroup()
    {
        return $this->group;
    }
}
