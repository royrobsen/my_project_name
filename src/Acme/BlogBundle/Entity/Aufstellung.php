<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Aufstellung
 */
class Aufstellung
{
    /**
     * @Assert\NotBlank()
     */
    
    /**
     * @var string
     */
    private $tw;

    /**
     * @var string
     */
    private $lav;

    /**
     * @var string
     */
    private $liv;

    /**
     * @var string
     */
    private $iv;

    /**
     * @var string
     */
    private $riv;

    /**
     * @var string
     */
    private $rav;

    /**
     * @var string
     */
    private $lm;

    /**
     * @var string
     */
    private $zlm;

    /**
     * @var string
     */
    private $zrm;

    /**
     * @var string
     */
    private $zom;

    /**
     * @var string
     */
    private $zdm;

    /**
     * @var string
     */
    private $rm;

    /**
     * @var string
     */
    private $ls;

    /**
     * @var string
     */
    private $ms;

    /**
     * @var string
     */
    private $rs;

    /**
     * @var string
     */
    private $sub1;

    /**
     * @var string
     */
    private $sub2;

    /**
     * @var string
     */
    private $sub3;

    /**
     * @var string
     */
    private $sub4;

    /**
     * @var string
     */
    private $sub5;

    /**
     * @var string
     */
    private $sub6;

    /**
     * @var string
     */
    private $sub7;

    /**
     * @var string
     */
    private $ch1;

    /**
     * @var string
     */
    private $ch2;

    /**
     * @var string
     */
    private $ch3;

    /**
     * @var string
     */
    private $ch4;

    /**
     * @var string
     */
    private $ch5;

    /**
     * @var string
     */
    private $ch6;

    /**
     * @var string
     */
    private $coach;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tw
     *
     * @param string $tw
     * @return Aufstellung
     */
    public function setTw($tw)
    {
        $this->tw = $tw;

        return $this;
    }

    /**
     * Get tw
     *
     * @return string 
     */
    public function getTw()
    {
        return $this->tw;
    }

    /**
     * Set lav
     *
     * @param string $lav
     * @return Aufstellung
     */
    public function setLav($lav)
    {
        $this->lav = $lav;

        return $this;
    }

    /**
     * Get lav
     *
     * @return string 
     */
    public function getLav()
    {
        return $this->lav;
    }

    /**
     * Set liv
     *
     * @param string $liv
     * @return Aufstellung
     */
    public function setLiv($liv)
    {
        $this->liv = $liv;

        return $this;
    }

    /**
     * Get liv
     *
     * @return string 
     */
    public function getLiv()
    {
        return $this->liv;
    }

    /**
     * Set iv
     *
     * @param integer $iv
     * @return Aufstellung
     */
    public function setIv($iv)
    {
        $this->iv = $iv;

        return $this;
    }

    /**
     * Get iv
     *
     * @return integer 
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * Set riv
     *
     * @param string $riv
     * @return Aufstellung
     */
    public function setRiv($riv)
    {
        $this->riv = $riv;

        return $this;
    }

    /**
     * Get riv
     *
     * @return string 
     */
    public function getRiv()
    {
        return $this->riv;
    }

    /**
     * Set rav
     *
     * @param string $rav
     * @return Aufstellung
     */
    public function setRav($rav)
    {
        $this->rav = $rav;

        return $this;
    }

    /**
     * Get rav
     *
     * @return string 
     */
    public function getRav()
    {
        return $this->rav;
    }

    /**
     * Set lm
     *
     * @param string $lm
     * @return Aufstellung
     */
    public function setLm($lm)
    {
        $this->lm = $lm;

        return $this;
    }

    /**
     * Get lm
     *
     * @return string 
     */
    public function getLm()
    {
        return $this->lm;
    }

    /**
     * Set zlm
     *
     * @param string $zlm
     * @return Aufstellung
     */
    public function setZlm($zlm)
    {
        $this->zlm = $zlm;

        return $this;
    }

    /**
     * Get zlm
     *
     * @return string 
     */
    public function getZlm()
    {
        return $this->zlm;
    }

    /**
     * Set zrm
     *
     * @param string $zrm
     * @return Aufstellung
     */
    public function setZrm($zrm)
    {
        $this->zrm = $zrm;

        return $this;
    }

    /**
     * Get zrm
     *
     * @return string 
     */
    public function getZrm()
    {
        return $this->zrm;
    }

    /**
     * Set zom
     *
     * @param string $zom
     * @return Aufstellung
     */
    public function setZom($zom)
    {
        $this->zom = $zom;

        return $this;
    }

    /**
     * Get zom
     *
     * @return string 
     */
    public function getZom()
    {
        return $this->zom;
    }

    /**
     * Set zdm
     *
     * @param string $zdm
     * @return Aufstellung
     */
    public function setZdm($zdm)
    {
        $this->zdm = $zdm;

        return $this;
    }

    /**
     * Get zdm
     *
     * @return string 
     */
    public function getZdm()
    {
        return $this->zdm;
    }

    /**
     * Set rm
     *
     * @param string $rm
     * @return Aufstellung
     */
    public function setRm($rm)
    {
        $this->rm = $rm;

        return $this;
    }

    /**
     * Get rm
     *
     * @return string 
     */
    public function getRm()
    {
        return $this->rm;
    }

    /**
     * Set ls
     *
     * @param string $ls
     * @return Aufstellung
     */
    public function setLs($ls)
    {
        $this->ls = $ls;

        return $this;
    }

    /**
     * Get ls
     *
     * @return string 
     */
    public function getLs()
    {
        return $this->ls;
    }

    /**
     * Set ms
     *
     * @param string $ms
     * @return Aufstellung
     */
    public function setMs($ms)
    {
        $this->ms = $ms;

        return $this;
    }

    /**
     * Get ms
     *
     * @return string 
     */
    public function getMs()
    {
        return $this->ms;
    }

    /**
     * Set rs
     *
     * @param string $rs
     * @return Aufstellung
     */
    public function setRs($rs)
    {
        $this->rs = $rs;

        return $this;
    }

    /**
     * Get rs
     *
     * @return string 
     */
    public function getRs()
    {
        return $this->rs;
    }

    /**
     * Set sub1
     *
     * @param string $sub1
     * @return Aufstellung
     */
    public function setSub1($sub1)
    {
        $this->sub1 = $sub1;

        return $this;
    }

    /**
     * Get sub1
     *
     * @return string 
     */
    public function getSub1()
    {
        return $this->sub1;
    }

    /**
     * Set sub2
     *
     * @param string $sub2
     * @return Aufstellung
     */
    public function setSub2($sub2)
    {
        $this->sub2 = $sub2;

        return $this;
    }

    /**
     * Get sub2
     *
     * @return string 
     */
    public function getSub2()
    {
        return $this->sub2;
    }

    /**
     * Set sub3
     *
     * @param string $sub3
     * @return Aufstellung
     */
    public function setSub3($sub3)
    {
        $this->sub3 = $sub3;

        return $this;
    }

    /**
     * Get sub3
     *
     * @return string 
     */
    public function getSub3()
    {
        return $this->sub3;
    }

    /**
     * Set sub4
     *
     * @param string $sub4
     * @return Aufstellung
     */
    public function setSub4($sub4)
    {
        $this->sub4 = $sub4;

        return $this;
    }

    /**
     * Get sub4
     *
     * @return string 
     */
    public function getSub4()
    {
        return $this->sub4;
    }

    /**
     * Set sub5
     *
     * @param string $sub5
     * @return Aufstellung
     */
    public function setSub5($sub5)
    {
        $this->sub5 = $sub5;

        return $this;
    }

    /**
     * Get sub5
     *
     * @return string 
     */
    public function getSub5()
    {
        return $this->sub5;
    }

    /**
     * Set sub6
     *
     * @param string $sub6
     * @return Aufstellung
     */
    public function setSub6($sub6)
    {
        $this->sub6 = $sub6;

        return $this;
    }

    /**
     * Get sub6
     *
     * @return string 
     */
    public function getSub6()
    {
        return $this->sub6;
    }

    /**
     * Set sub7
     *
     * @param string $sub7
     * @return Aufstellung
     */
    public function setSub7($sub7)
    {
        $this->sub7 = $sub7;

        return $this;
    }

    /**
     * Get sub7
     *
     * @return string 
     */
    public function getSub7()
    {
        return $this->sub7;
    }

    /**
     * Set ch1
     *
     * @param string $ch1
     * @return Aufstellung
     */
    public function setCh1($ch1)
    {
        $this->ch1 = $ch1;

        return $this;
    }

    /**
     * Get ch1
     *
     * @return string 
     */
    public function getCh1()
    {
        return $this->ch1;
    }

    /**
     * Set ch2
     *
     * @param string $ch2
     * @return Aufstellung
     */
    public function setCh2($ch2)
    {
        $this->ch2 = $ch2;

        return $this;
    }

    /**
     * Get ch2
     *
     * @return string 
     */
    public function getCh2()
    {
        return $this->ch2;
    }

    /**
     * Set ch3
     *
     * @param string $ch3
     * @return Aufstellung
     */
    public function setCh3($ch3)
    {
        $this->ch3 = $ch3;

        return $this;
    }

    /**
     * Get ch3
     *
     * @return string 
     */
    public function getCh3()
    {
        return $this->ch3;
    }

    /**
     * Set ch4
     *
     * @param string $ch4
     * @return Aufstellung
     */
    public function setCh4($ch4)
    {
        $this->ch4 = $ch4;

        return $this;
    }

    /**
     * Get ch4
     *
     * @return string 
     */
    public function getCh4()
    {
        return $this->ch4;
    }

    /**
     * Set ch5
     *
     * @param string $ch5
     * @return Aufstellung
     */
    public function setCh5($ch5)
    {
        $this->ch5 = $ch5;

        return $this;
    }

    /**
     * Get ch5
     *
     * @return string 
     */
    public function getCh5()
    {
        return $this->ch5;
    }

    /**
     * Set ch6
     *
     * @param string $ch6
     * @return Aufstellung
     */
    public function setCh6($ch6)
    {
        $this->ch6 = $ch6;

        return $this;
    }

    /**
     * Get ch6
     *
     * @return string 
     */
    public function getCh6()
    {
        return $this->ch6;
    }

    /**
     * Set coach
     *
     * @param string $coach
     * @return Aufstellung
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return string 
     */
    public function getCoach()
    {
        return $this->coach;
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
     * @return Aufstellung
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
