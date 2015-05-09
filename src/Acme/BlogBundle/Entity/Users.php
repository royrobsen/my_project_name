<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Users
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $groupId;

    /**
     * @var string
     */
    private $passkeyword;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $lastVisit;

    /**
     * @var boolean
     */
    private $blocked;

    /**
     * @var boolean
     */
    private $sendMail;

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
    private $position;

    /**
     * @var integer
     */
    private $fotoid;

    /**
     * @var integer
     */
    private $ersatzbank;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set groupId
     *
     * @param string $groupId
     * @return Users
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return string 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set passkeyword
     *
     * @param string $passkeyword
     * @return Users
     */
    public function setPasskeyword($passkeyword)
    {
        $this->passkeyword = $passkeyword;

        return $this;
    }

    /**
     * Get passkeyword
     *
     * @return string 
     */
    public function getPasskeyword()
    {
        return $this->passkeyword;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Users
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Users
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
     * Set lastVisit
     *
     * @param \DateTime $lastVisit
     * @return Users
     */
    public function setLastVisit($lastVisit)
    {
        $this->lastVisit = $lastVisit;

        return $this;
    }

    /**
     * Get lastVisit
     *
     * @return \DateTime 
     */
    public function getLastVisit()
    {
        return $this->lastVisit;
    }

    /**
     * Set blocked
     *
     * @param boolean $blocked
     * @return Users
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Get blocked
     *
     * @return boolean 
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Set sendMail
     *
     * @param boolean $sendMail
     * @return Users
     */
    public function setSendMail($sendMail)
    {
        $this->sendMail = $sendMail;

        return $this;
    }

    /**
     * Get sendMail
     *
     * @return boolean 
     */
    public function getSendMail()
    {
        return $this->sendMail;
    }

    /**
     * Set goals
     *
     * @param integer $goals
     * @return Users
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
     * @return Users
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
     * Set position
     *
     * @param string $position
     * @return Users
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
     * Set fotoid
     *
     * @param integer $fotoid
     * @return Users
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
     * Set ersatzbank
     *
     * @param integer $ersatzbank
     * @return Users
     */
    public function setErsatzbank($ersatzbank)
    {
        $this->ersatzbank = $ersatzbank;

        return $this;
    }

    /**
     * Get ersatzbank
     *
     * @return integer 
     */
    public function getErsatzbank()
    {
        return $this->ersatzbank;
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
     * @return Users
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
     * @var \Acme\BlogBundle\Entity\UserGroups
     */
    private $group;


    /**
     * Set group
     *
     * @param \Acme\BlogBundle\Entity\UserGroups $group
     * @return Users
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
    
    private $attachment;
        

    /**
     * Set attachment
     */
    public function setAttachment($attachment = null)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }   
    
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->passkeyword;
    }
    
    public function getRoles()
    {
        if($this->groupId == 1) {
            return array('ROLE_SUPER_ADMIN');
        } 
        elseif($this->groupId == 2) {
            return array('ROLE_ADMIN');
        }
        elseif($this->groupId == 3) {
            return array('ROLE_USER');
        }
        elseif($this->groupId == 4) {
            return array('ROLE_GUEST');
        }
        elseif($this->groupId == 5) {
            return array('ROLE_SPECIAL');
        }
    }

    public function eraseCredentials()
    {
    }  
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->email,
            $this->passkeyword,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->email,
            $this->passkeyword,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    
}
