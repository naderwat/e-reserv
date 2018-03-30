<?php

namespace ResBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass="ResBundle\Repository\RoomRepository")
 */
class Room
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadded", type="datetimetz")
     */
    private $dateadded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateedited", type="datetimetz")
     */
    private $dateedited;


    /**
    *
    *@ORM\ManyToOne(targetEntity="ResBundle\Entity\User", cascade={"all"})
    */
    private $useradded;

    /**
    *
    *@ORM\ManyToOne(targetEntity="ResBundle\Entity\Site", cascade={"all"})
    */
    private $site;


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
     * Set name
     *
     * @param string $name
     *
     * @return Room
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
     * Set description
     *
     * @param string $description
     *
     * @return Room
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
     * Set dateadded
     *
     * @param \DateTime $dateadded
     *
     * @return Room
     */
    public function setDateadded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get dateadded
     *
     * @return \DateTime
     */
    public function getDateadded()
    {
        return $this->dateadded;
    }

    /**
     * Set dateedited
     *
     * @param \DateTime $dateedited
     *
     * @return Room
     */
    public function setDateedited($dateedited)
    {
        $this->dateedited = $dateedited;

        return $this;
    }

    /**
     * Get dateedited
     *
     * @return \DateTime
     */
    public function getDateedited()
    {
        return $this->dateedited;
    }

    /**
     * Set useradded
     *
     * @param \ResBundle\Entity\User $useradded
     *
     * @return Room
     */
    public function setUseradded(\ResBundle\Entity\User $useradded = null)
    {
        $this->useradded = $useradded;

        return $this;
    }

    /**
     * Get useradded
     *
     * @return \ResBundle\Entity\User
     */
    public function getUseradded()
    {
        return $this->useradded;
    }

    /**
     * Set site
     *
     * @param \ResBundle\Entity\Site $site
     *
     * @return Room
     */
    public function setSite(\ResBundle\Entity\Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \ResBundle\Entity\Site
     */
    public function getSite()
    {
        return $this->site;
    }
}
