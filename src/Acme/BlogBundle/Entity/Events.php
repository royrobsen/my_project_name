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
     * @var string
     */
    private $heim;
    
    /**
     * @var string
     */
    private $gast;
    
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
     * Set heim
     *
     * @param string $heim
     * @return Events
     */
    public function setHeim($heim)
    {
        $this->heim = $heim;

        return $this;
    }

    /**
     * Get heim
     *
     * @return string 
     */
    public function getHeim()
    {
        return $this->heim;
    }
    
    /**
     * Set gast
     *
     * @param string $gast
     * @return Events
     */
    public function setGast($gast)
    {
        $this->gast = $gast;

        return $this;
    }

    /**
     * Get gast
     *
     * @return string 
     */
    public function getGast()
    {
        return $this->gast;
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
    /**
     * @var \Acme\BlogBundle\Entity\EventCategory
     */
    private $eventcategory;


    /**
     * Set eventcategory
     *
     * @param \Acme\BlogBundle\Entity\EventCategory $eventcategory
     * @return Events
     */
    public function setEventcategory(\Acme\BlogBundle\Entity\EventCategory $eventcategory = null)
    {
        $this->eventcategory = $eventcategory;

        return $this;
    }

    /**
     * Get eventcategory
     *
     * @return \Acme\BlogBundle\Entity\EventCategory 
     */
    public function getEventcategory()
    {
        return $this->eventcategory;
    }
    /**
     * @var \Acme\BlogBundle\Entity\UserGroups
     */
    private $group;


    /**
     * Set group
     *
     * @param \Acme\BlogBundle\Entity\UserGroups $group
     * @return Events
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
    /**
     * @var string
     */
    private $toreHeim;

    /**
     * @var string
     */
    private $toreGast;

    /**
     * @var string
     */
    private $logoHeim;

    /**
     * @var string
     */
    private $logoGast;

    /**
     * @var \Acme\BlogBundle\Entity\EventCategory
     */
    private $eventcat;


    /**
     * Set toreHeim
     *
     * @param string $toreHeim
     * @return Events
     */
    public function setToreHeim($toreHeim)
    {
        $this->toreHeim = $toreHeim;

        return $this;
    }

    /**
     * Get toreHeim
     *
     * @return string 
     */
    public function getToreHeim()
    {
        return $this->toreHeim;
    }

    /**
     * Set toreGast
     *
     * @param string $toreGast
     * @return Events
     */
    public function setToreGast($toreGast)
    {
        $this->toreGast = $toreGast;

        return $this;
    }

    /**
     * Get toreGast
     *
     * @return string 
     */
    public function getToreGast()
    {
        return $this->toreGast;
    }

    /**
     * Set logoHeim
     *
     * @param string $logoHeim
     * @return Events
     */
    public function setLogoHeim($logoHeim)
    {
        $this->logoHeim = $logoHeim;

        return $this;
    }

    /**
     * Get logoHeim
     *
     * @return string 
     */
    public function getLogoHeim()
    {
        return $this->logoHeim;
    }

    /**
     * Set logoGast
     *
     * @param string $logoGast
     * @return Events
     */
    public function setLogoGast($logoGast)
    {
        $this->logoGast = $logoGast;

        return $this;
    }

    /**
     * Get logoGast
     *
     * @return string 
     */
    public function getLogoGast()
    {
        return $this->logoGast;
    }

    /**
     * Set eventcat
     *
     * @param \Acme\BlogBundle\Entity\EventCategory $eventcat
     * @return Events
     */
    public function setEventcat(\Acme\BlogBundle\Entity\EventCategory $eventcat = null)
    {
        $this->eventcat = $eventcat;

        return $this;
    }

    /**
     * Get eventcat
     *
     * @return \Acme\BlogBundle\Entity\EventCategory 
     */
    public function getEventcat()
    {
        return $this->eventcat;
    }
}
