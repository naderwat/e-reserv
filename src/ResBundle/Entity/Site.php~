<?php

namespace ResBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity(repositoryClass="ResBundle\Repository\SiteRepository")
 */
class Site
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadded", type="datetime")
     */
    private $dateadded;



    /**
    *@ORM\ManyToOne(targetEntity="ResBundle\Entity\User",cascade={"persist"})
    *
    */
    private $useradded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateedited", type="datetime")
     */
    private $dateedited;


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
     * Set title
     *
     * @param string $title
     *
     * @return Site
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
     * Set description
     *
     * @param string $description
     *
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
}
