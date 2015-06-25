<?php

namespace Eeckman\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Artists
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\ObjectBundle\Repository\ArtistsRepository")
 */
class Artists
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=50)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BirthDate", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DeathDate", type="date", nullable=true)
     */
    private $deathDate;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Artists
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
     * Set lastName
     *
     * @param string $lastName
     * @return Artists
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Artists
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set deathDate
     *
     * @param \DateTime $deathDate
     * @return Artists
     */
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * Get deathDate
     *
     * @return \DateTime 
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    public function __toString()
    {
        return $this->firstName.' '.$this->lastName;
    }
}
