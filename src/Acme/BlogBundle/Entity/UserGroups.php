<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroups
 */
class UserGroups
{
    /**
     * @var string
     */
    private $groupName;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set groupName
     *
     * @param string $groupName
     * @return UserGroups
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
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
     * @return UserGroups
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;


    /**
     * Add category
     *
     * @param \Acme\BlogBundle\Entity\Categories $category
     * @return UserGroups
     */
    public function addCategory(\Acme\BlogBundle\Entity\Categories $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Acme\BlogBundle\Entity\Categories $category
     */
    public function removeCategory(\Acme\BlogBundle\Entity\Categories $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $event;


    /**
     * Add event
     *
     * @param \Acme\BlogBundle\Entity\Events $event
     * @return UserGroups
     */
    public function addEvent(\Acme\BlogBundle\Entity\Events $event)
    {
        $this->event[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \Acme\BlogBundle\Entity\Events $event
     */
    public function removeEvent(\Acme\BlogBundle\Entity\Events $event)
    {
        $this->event->removeElement($event);
    }

    /**
     * Get event
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvent()
    {
        return $this->event;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;


    /**
     * Add users
     *
     * @param \Acme\BlogBundle\Entity\Users $users
     * @return UserGroups
     */
    public function addUser(\Acme\BlogBundle\Entity\Users $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Acme\BlogBundle\Entity\Users $users
     */
    public function removeUser(\Acme\BlogBundle\Entity\Users $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
