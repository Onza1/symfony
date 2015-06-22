<?php

namespace Eeckman\PolicyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InsuranceCompanies
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\PolicyBundle\Repository\InsuranceCompaniesRepository")
 */
class InsuranceCompanies
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
     * @ORM\Column(name="Name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="Website", type="string", length=200, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="SinistrePhone", type="string", length=50, nullable=true)
     */
    private $sinistrePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="SinistreMail", type="string", length=50, nullable=true)
     */
    private $sinistreMail;


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
     * Set name
     *
     * @param string $name
     * @return InsuranceCompanies
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
     * Set logo
     *
     * @param string $logo
     * @return InsuranceCompanies
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return InsuranceCompanies
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set sinistrePhone
     *
     * @param string $sinistrePhone
     * @return InsuranceCompanies
     */
    public function setSinistrePhone($sinistrePhone)
    {
        $this->sinistrePhone = $sinistrePhone;

        return $this;
    }

    /**
     * Get sinistrePhone
     *
     * @return string 
     */
    public function getSinistrePhone()
    {
        return $this->sinistrePhone;
    }

    /**
     * Set sinistreMail
     *
     * @param string $sinistreMail
     * @return InsuranceCompanies
     */
    public function setSinistreMail($sinistreMail)
    {
        $this->sinistreMail = $sinistreMail;

        return $this;
    }

    /**
     * Get sinistreMail
     *
     * @return string 
     */
    public function getSinistreMail()
    {
        return $this->sinistreMail;
    }
}
