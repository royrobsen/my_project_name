<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 */
class Menu
{
    /**
     * @var string
     */
    private $menuName;

    /**
     * @var string
     */
    private $path;

    /**
     * @var boolean
     */
    private $published;

    /**
     * @var integer
     */
    private $parentId;

    /**
     * @var boolean
     */
    private $access;

    /**
     * @var integer
     */
    private $ordering;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set menuName
     *
     * @param string $menuName
     * @return Menu
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;

        return $this;
    }

    /**
     * Get menuName
     *
     * @return string 
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Menu
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Menu
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return Menu
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set access
     *
     * @param boolean $access
     * @return Menu
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return boolean 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return Menu
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
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
