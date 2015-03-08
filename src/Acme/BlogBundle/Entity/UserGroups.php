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
}
