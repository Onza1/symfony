<?php

namespace Eeckman\CertificateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificates
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\CertificateBundle\Repository\CertificatesRepository")
 */
class Certificates
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
     * @var \DateTime
     *
     * @ORM\Column(name="CreationDate", type="date")
     */
    private $creationDate;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\CoverageBundle\Entity\Coverages")
     * @ORM\JoinColumn(name="ID_Coverage", referencedColumnName="id")
     */
    private $iDCoverage;

    /**
     *
     * @ORM\ManyToOne(targetEntity="CertificateTypes")
     * @ORM\JoinColumn(name="ID_CertificateType", referencedColumnName="id")
     */
    private $iDCertificateType;

    /**
     * @var string
     *
     * @ORM\Column(name="File", type="string", length=255)
     */
    private $file;

    /**
     * @var integer
     *
     * @ORM\Column(name="Version", type="integer")
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientName", type="string", length=50, nullable=true)
     */
    private $clientName;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientAddressLine1", type="string", length=100, nullable=true)
     */
    private $clientAddressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientAddressLine2", type="string", length=100, nullable=true)
     */
    private $clientAddressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientZipCode", type="string", length=20, nullable=true)
     */
    private $clientZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientLocality", type="string", length=50, nullable=true)
     */
    private $clientLocality;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientCountry", type="string", length=50, nullable=true)
     */
    private $clientCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientContactFirstName", type="string", length=50, nullable=true)
     */
    private $clientContactFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientContactLastName", type="string", length=50, nullable=true)
     */
    private $clientContactLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientContactPhone", type="string", length=50, nullable=true)
     */
    private $clientContactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientContactMail", type="string", length=50, nullable=true)
     */
    private $clientContactMail;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerFirstName", type="string", length=50, nullable=true)
     */
    private $ownerFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerLastName", type="string", length=50, nullable=true)
     */
    private $ownerLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerAddressLine1", type="string", length=100, nullable=true)
     */
    private $ownerAddressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerAddressLine2", type="string", length=100, nullable=true)
     */
    private $ownerAddressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerZipCode", type="string", length=20, nullable=true)
     */
    private $ownerZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerLocality", type="string", length=50, nullable=true)
     */
    private $ownerLocality;

    /**
     * @var string
     *
     * @ORM\Column(name="OwnerCountry", type="string", length=50, nullable=true)
     */
    private $ownerCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="ContractNumber", type="string", length=50, nullable=true)
     */
    private $contractNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PolicyRef", type="string", length=50, nullable=true)
     */
    private $policyRef;

    /**
     * @var string
     *
     * @ORM\Column(name="EventName", type="string", length=200, nullable=true)
     */
    private $eventName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartDate", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EndDate", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="GarantyObject", type="text", nullable=true)
     */
    private $garantyObject;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AbandonRecours", type="boolean", nullable=true)
     */
    private $abandonRecours;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectTitle", type="string", length=200, nullable=true)
     */
    private $objectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectDescription", type="text", nullable=true)
     */
    private $objectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ArtistFirstName", type="string", length=50, nullable=true)
     */
    private $artistFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="ArtistLastName", type="string", length=50, nullable=true)
     */
    private $artistLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Material", type="string", length=50, nullable=true)
     */
    private $material;

    /**
     * @var integer
     *
     * @ORM\Column(name="Year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var float
     *
     * @ORM\Column(name="Length", type="float", nullable=true)
     */
    private $length;

    /**
     * @var float
     *
     * @ORM\Column(name="Height", type="float", nullable=true)
     */
    private $height;

    /**
     * @var float
     *
     * @ORM\Column(name="Depth", type="float", nullable=true)
     */
    private $depth;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\UserBundle\Entity\Users")
     * @ORM\JoinColumn(name="ID_User", referencedColumnName="id")
     */
    private $iDUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Technic", type="string", length=50, nullable=true)
     */
    private $technic;

    /**
     * @var string
     *
     * @ORM\Column(name="Object_Type", type="string", length=50, nullable=true)
     */
    private $objectType;

    /**
     * @var string
     *
     * @ORM\Column(name="Period", type="string", length=50, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="TransportType", type="string", length=50, nullable=true)
     */
    private $transportType;


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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Certificates
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set iDCoverage
     *
     * @param integer $iDCoverage
     * @return Certificates
     */
    public function setIDCoverage($iDCoverage)
    {
        $this->iDCoverage = $iDCoverage;

        return $this;
    }

    /**
     * Get iDCoverage
     *
     * @return integer 
     */
    public function getIDCoverage()
    {
        return $this->iDCoverage;
    }

    /**
     * Set iDCertificateType
     *
     * @param integer $iDCertificateType
     * @return Certificates
     */
    public function setIDCertificateType($iDCertificateType)
    {
        $this->iDCertificateType = $iDCertificateType;

        return $this;
    }

    /**
     * Get iDCertificateType
     *
     * @return integer 
     */
    public function getIDCertificateType()
    {
        return $this->iDCertificateType;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Certificates
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return Certificates
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set clientName
     *
     * @param string $clientName
     * @return Certificates
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set clientAddressLine1
     *
     * @param string $clientAddressLine1
     * @return Certificates
     */
    public function setClientAddressLine1($clientAddressLine1)
    {
        $this->clientAddressLine1 = $clientAddressLine1;

        return $this;
    }

    /**
     * Get clientAddressLine1
     *
     * @return string 
     */
    public function getClientAddressLine1()
    {
        return $this->clientAddressLine1;
    }

    /**
     * Set clientAddressLine2
     *
     * @param string $clientAddressLine2
     * @return Certificates
     */
    public function setClientAddressLine2($clientAddressLine2)
    {
        $this->clientAddressLine2 = $clientAddressLine2;

        return $this;
    }

    /**
     * Get clientAddressLine2
     *
     * @return string 
     */
    public function getClientAddressLine2()
    {
        return $this->clientAddressLine2;
    }

    /**
     * Set clientZipCode
     *
     * @param string $clientZipCode
     * @return Certificates
     */
    public function setClientZipCode($clientZipCode)
    {
        $this->clientZipCode = $clientZipCode;

        return $this;
    }

    /**
     * Get clientZipCode
     *
     * @return string 
     */
    public function getClientZipCode()
    {
        return $this->clientZipCode;
    }

    /**
     * Set clientLocality
     *
     * @param string $clientLocality
     * @return Certificates
     */
    public function setClientLocality($clientLocality)
    {
        $this->clientLocality = $clientLocality;

        return $this;
    }

    /**
     * Get clientLocality
     *
     * @return string 
     */
    public function getClientLocality()
    {
        return $this->clientLocality;
    }

    /**
     * Set clientCountry
     *
     * @param string $clientCountry
     * @return Certificates
     */
    public function setClientCountry($clientCountry)
    {
        $this->clientCountry = $clientCountry;

        return $this;
    }

    /**
     * Get clientCountry
     *
     * @return string 
     */
    public function getClientCountry()
    {
        return $this->clientCountry;
    }

    /**
     * Set clientContactFirstName
     *
     * @param string $clientContactFirstName
     * @return Certificates
     */
    public function setClientContactFirstName($clientContactFirstName)
    {
        $this->clientContactFirstName = $clientContactFirstName;

        return $this;
    }

    /**
     * Get clientContactFirstName
     *
     * @return string 
     */
    public function getClientContactFirstName()
    {
        return $this->clientContactFirstName;
    }

    /**
     * Set clientContactLastName
     *
     * @param string $clientContactLastName
     * @return Certificates
     */
    public function setClientContactLastName($clientContactLastName)
    {
        $this->clientContactLastName = $clientContactLastName;

        return $this;
    }

    /**
     * Get clientContactLastName
     *
     * @return string 
     */
    public function getClientContactLastName()
    {
        return $this->clientContactLastName;
    }

    /**
     * Set clientContactPhone
     *
     * @param string $clientContactPhone
     * @return Certificates
     */
    public function setClientContactPhone($clientContactPhone)
    {
        $this->clientContactPhone = $clientContactPhone;

        return $this;
    }

    /**
     * Get clientContactPhone
     *
     * @return string 
     */
    public function getClientContactPhone()
    {
        return $this->clientContactPhone;
    }

    /**
     * Set clientContactMail
     *
     * @param string $clientContactMail
     * @return Certificates
     */
    public function setClientContactMail($clientContactMail)
    {
        $this->clientContactMail = $clientContactMail;

        return $this;
    }

    /**
     * Get clientContactMail
     *
     * @return string 
     */
    public function getClientContactMail()
    {
        return $this->clientContactMail;
    }

    /**
     * Set ownerFirstName
     *
     * @param string $ownerFirstName
     * @return Certificates
     */
    public function setOwnerFirstName($ownerFirstName)
    {
        $this->ownerFirstName = $ownerFirstName;

        return $this;
    }

    /**
     * Get ownerFirstName
     *
     * @return string 
     */
    public function getOwnerFirstName()
    {
        return $this->ownerFirstName;
    }

    /**
     * Set ownerLastName
     *
     * @param string $ownerLastName
     * @return Certificates
     */
    public function setOwnerLastName($ownerLastName)
    {
        $this->ownerLastName = $ownerLastName;

        return $this;
    }

    /**
     * Get ownerLastName
     *
     * @return string 
     */
    public function getOwnerLastName()
    {
        return $this->ownerLastName;
    }

    /**
     * Set ownerAddressLine1
     *
     * @param string $ownerAddressLine1
     * @return Certificates
     */
    public function setOwnerAddressLine1($ownerAddressLine1)
    {
        $this->ownerAddressLine1 = $ownerAddressLine1;

        return $this;
    }

    /**
     * Get ownerAddressLine1
     *
     * @return string 
     */
    public function getOwnerAddressLine1()
    {
        return $this->ownerAddressLine1;
    }

    /**
     * Set ownerAddressLine2
     *
     * @param string $ownerAddressLine2
     * @return Certificates
     */
    public function setOwnerAddressLine2($ownerAddressLine2)
    {
        $this->ownerAddressLine2 = $ownerAddressLine2;

        return $this;
    }

    /**
     * Get ownerAddressLine2
     *
     * @return string 
     */
    public function getOwnerAddressLine2()
    {
        return $this->ownerAddressLine2;
    }

    /**
     * Set ownerZipCode
     *
     * @param string $ownerZipCode
     * @return Certificates
     */
    public function setOwnerZipCode($ownerZipCode)
    {
        $this->ownerZipCode = $ownerZipCode;

        return $this;
    }

    /**
     * Get ownerZipCode
     *
     * @return string 
     */
    public function getOwnerZipCode()
    {
        return $this->ownerZipCode;
    }

    /**
     * Set ownerLocality
     *
     * @param string $ownerLocality
     * @return Certificates
     */
    public function setOwnerLocality($ownerLocality)
    {
        $this->ownerLocality = $ownerLocality;

        return $this;
    }

    /**
     * Get ownerLocality
     *
     * @return string 
     */
    public function getOwnerLocality()
    {
        return $this->ownerLocality;
    }

    /**
     * Set ownerCountry
     *
     * @param string $ownerCountry
     * @return Certificates
     */
    public function setOwnerCountry($ownerCountry)
    {
        $this->ownerCountry = $ownerCountry;

        return $this;
    }

    /**
     * Get ownerCountry
     *
     * @return string 
     */
    public function getOwnerCountry()
    {
        return $this->ownerCountry;
    }

    /**
     * Set contractNumber
     *
     * @param string $contractNumber
     * @return Certificates
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Get contractNumber
     *
     * @return string 
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Set policyRef
     *
     * @param string $policyRef
     * @return Certificates
     */
    public function setPolicyRef($policyRef)
    {
        $this->policyRef = $policyRef;

        return $this;
    }

    /**
     * Get policyRef
     *
     * @return string 
     */
    public function getPolicyRef()
    {
        return $this->policyRef;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     * @return Certificates
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Certificates
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Certificates
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set garantyObject
     *
     * @param string $garantyObject
     * @return Certificates
     */
    public function setGarantyObject($garantyObject)
    {
        $this->garantyObject = $garantyObject;

        return $this;
    }

    /**
     * Get garantyObject
     *
     * @return string 
     */
    public function getGarantyObject()
    {
        return $this->garantyObject;
    }

    /**
     * Set abandonRecours
     *
     * @param boolean $abandonRecours
     * @return Certificates
     */
    public function setAbandonRecours($abandonRecours)
    {
        $this->abandonRecours = $abandonRecours;

        return $this;
    }

    /**
     * Get abandonRecours
     *
     * @return boolean 
     */
    public function getAbandonRecours()
    {
        return $this->abandonRecours;
    }

    /**
     * Set objectTitle
     *
     * @param string $objectTitle
     * @return Certificates
     */
    public function setObjectTitle($objectTitle)
    {
        $this->objectTitle = $objectTitle;

        return $this;
    }

    /**
     * Get objectTitle
     *
     * @return string 
     */
    public function getObjectTitle()
    {
        return $this->objectTitle;
    }

    /**
     * Set objectDescription
     *
     * @param string $objectDescription
     * @return Certificates
     */
    public function setObjectDescription($objectDescription)
    {
        $this->objectDescription = $objectDescription;

        return $this;
    }

    /**
     * Get objectDescription
     *
     * @return string 
     */
    public function getObjectDescription()
    {
        return $this->objectDescription;
    }

    /**
     * Set artistFirstName
     *
     * @param string $artistFirstName
     * @return Certificates
     */
    public function setArtistFirstName($artistFirstName)
    {
        $this->artistFirstName = $artistFirstName;

        return $this;
    }

    /**
     * Get artistFirstName
     *
     * @return string 
     */
    public function getArtistFirstName()
    {
        return $this->artistFirstName;
    }

    /**
     * Set artistLastName
     *
     * @param string $artistLastName
     * @return Certificates
     */
    public function setArtistLastName($artistLastName)
    {
        $this->artistLastName = $artistLastName;

        return $this;
    }

    /**
     * Get artistLastName
     *
     * @return string 
     */
    public function getArtistLastName()
    {
        return $this->artistLastName;
    }

    /**
     * Set material
     *
     * @param string $material
     * @return Certificates
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return string 
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Certificates
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set length
     *
     * @param float $length
     * @return Certificates
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return float 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set height
     *
     * @param float $height
     * @return Certificates
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set depth
     *
     * @param float $depth
     * @return Certificates
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return float 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set iDUser
     *
     * @param integer $iDUser
     * @return Certificates
     */
    public function setIDUser($iDUser)
    {
        $this->iDUser = $iDUser;

        return $this;
    }

    /**
     * Get iDUser
     *
     * @return integer 
     */
    public function getIDUser()
    {
        return $this->iDUser;
    }

    /**
     * Set technic
     *
     * @param string $technic
     * @return Certificates
     */
    public function setTechnic($technic)
    {
        $this->technic = $technic;

        return $this;
    }

    /**
     * Get technic
     *
     * @return string 
     */
    public function getTechnic()
    {
        return $this->technic;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return Certificates
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return string 
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return Certificates
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
     * Set transportType
     *
     * @param string $transportType
     * @return Certificates
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;

        return $this;
    }

    /**
     * Get transportType
     *
     * @return string 
     */
    public function getTransportType()
    {
        return $this->transportType;
    }
}
