<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xrx6tStats
 */
class Xrx6tStats
{
    /**
     * @var integer
     */
    private $userid;

    /**
     * @var integer
     */
    private $goals;

    /**
     * @var integer
     */
    private $games;

    /**
     * @var string
     */
    private $bildurl;

    /**
     * @var string
     */
    private $position;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userid
     *
     * @param integer $userid
     * @return Xrx6tStats
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
     * Set goals
     *
     * @param integer $goals
     * @return Xrx6tStats
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get goals
     *
     * @return integer 
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set games
     *
     * @param integer $games
     * @return Xrx6tStats
     */
    public function setGames($games)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * Get games
     *
     * @return integer 
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Set bildurl
     *
     * @param string $bildurl
     * @return Xrx6tStats
     */
    public function setBildurl($bildurl)
    {
        $this->bildurl = $bildurl;

        return $this;
    }

    /**
     * Get bildurl
     *
     * @return string 
     */
    public function getBildurl()
    {
        return $this->bildurl;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Xrx6tStats
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
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
