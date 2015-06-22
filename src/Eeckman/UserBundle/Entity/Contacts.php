<?php

namespace Eeckman\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contacts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\UserBundle\Repository\contactsRepository")
 */
class contacts
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
     * @ORM\Column(name="Company_name", type="string", length=50, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="Civility", type="string", length=20, nullable=true)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="MoreName", type="string", length=100, nullable=true)
     */
    private $moreName;

    /**
     * @var string
     *
     * @ORM\Column(name="EnterpriseNumber", type="string", length=50, nullable=true)
     */
    private $enterpriseNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Language", type="integer")
     */
    private $iDLanguage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_companyType", type="integer", nullable=true)
     */
    private $iDCompanyType;


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
     * Set companyName
     *
     * @param string $companyName
     * @return contacts
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set civility
     *
     * @param string $civility
     * @return contacts
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility
     *
     * @return string 
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return contacts
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
     * @return contacts
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
     * Set moreName
     *
     * @param string $moreName
     * @return contacts
     */
    public function setMoreName($moreName)
    {
        $this->moreName = $moreName;

        return $this;
    }

    /**
     * Get moreName
     *
     * @return string 
     */
    public function getMoreName()
    {
        return $this->moreName;
    }

    /**
     * Set enterpriseNumber
     *
     * @param string $enterpriseNumber
     * @return contacts
     */
    public function setEnterpriseNumber($enterpriseNumber)
    {
        $this->enterpriseNumber = $enterpriseNumber;

        return $this;
    }

    /**
     * Get enterpriseNumber
     *
     * @return string 
     */
    public function getEnterpriseNumber()
    {
        return $this->enterpriseNumber;
    }

    /**
     * Set iDLanguage
     *
     * @param integer $iDLanguage
     * @return contacts
     */
    public function setIDLanguage($iDLanguage)
    {
        $this->iDLanguage = $iDLanguage;

        return $this;
    }

    /**
     * Get iDLanguage
     *
     * @return integer 
     */
    public function getIDLanguage()
    {
        return $this->iDLanguage;
    }

    /**
     * Set iDCompanyType
     *
     * @param integer $iDCompanyType
     * @return contacts
     */
    public function setIDCompanyType($iDCompanyType)
    {
        $this->iDCompanyType = $iDCompanyType;

        return $this;
    }

    /**
     * Get iDCompanyType
     *
     * @return integer 
     */
    public function getIDCompanyType()
    {
        return $this->iDCompanyType;
    }
}
