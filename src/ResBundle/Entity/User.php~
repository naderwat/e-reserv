<?php

namespace ResBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="ResBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


      /**
     * @var \DateTime|null
     *@ORM\column(name="dateInscription",type="datetime")
     */
    private  $dateInscription;


    /**
     * @var boolean
     *@ORM\column(name="isLHC",type="boolean")
     */
    private $isLHC;

    /**
     * @var boolean
     *@ORM\column(name="isCSM",type="boolean")
     */
    private $isCSM;
    


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

   

    /**
     * Set isLHC
     *
     * @param boolean $isLHC
     *
     * @return User
     */
    public function setIsLHC($isLHC)
    {
        $this->isLHC = $isLHC;

        return $this;
    }

    /**
     * Get isLHC
     *
     * @return boolean
     */
    public function getIsLHC()
    {
        return $this->isLHC;
    }

    /**
     * Set isCSM
     *
     * @param boolean $isCSM
     *
     * @return User
     */
    public function setIsCSM($isCSM)
    {
        $this->isCSM = $isCSM;

        return $this;
    }

    /**
     * Get isCSM
     *
     * @return boolean
     */
    public function getIsCSM()
    {
        return $this->isCSM;
    }
}
