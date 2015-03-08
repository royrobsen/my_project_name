<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 */
class Events
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $alias;

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
     * @var integer
     */
    private $modifiedBy;

    /**
     * @var integer
     */
    private $eventcatId;

    /**
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var \DateTime
     */
    private $enddate;

    /**
     * @var string
     */
    private $period;

    /**
     * @var \DateTime
     */
    private $next;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $intervall;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     * @return Events
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
     * Set alias
     *
     * @param string $alias
     * @return Events
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
     * Set access
     *
     * @param integer $access
     * @return Events
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
     * @return Events
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
     * @return Events
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
     * @return Events
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
     * @param integer $modifiedBy
     * @return Events
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set eventcatId
     *
     * @param integer $eventcatId
     * @return Events
     */
    public function setEventcatId($eventcatId)
    {
        $this->eventcatId = $eventcatId;

        return $this;
    }

    /**
     * Get eventcatId
     *
     * @return integer 
     */
    public function getEventcatId()
    {
        return $this->eventcatId;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Events
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Events
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return Events
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set next
     *
     * @param \DateTime $next
     * @return Events
     */
    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * Get next
     *
     * @return \DateTime 
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Events
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Events
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Events
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Events
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Events
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
     * Set intervall
     *
     * @param integer $intervall
     * @return Events
     */
    public function setIntervall($intervall)
    {
        $this->intervall = $intervall;

        return $this;
    }

    /**
     * Get intervall
     *
     * @return integer 
     */
    public function getIntervall()
    {
        return $this->intervall;
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
