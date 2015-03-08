<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventCategory
 */
class EventCategory
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $state;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     * @return EventCategory
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
     * Set state
     *
     * @param boolean $state
     * @return EventCategory
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
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
