<?php

namespace Eeckman\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Eeckman\UserBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Contacts")
     * @ORM\JoinColumn(name="ID_Contact", referencedColumnName="id")
     */
    private $iDContact;

    /**
     * @ORM\ManyToOne(targetEntity="UserRoles")
     * @ORM\JoinColumn(name="ID_UserRole", referencedColumnName="id")
     */
    private $iDUserRole;


    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\EventsBundle\Entity\Events")
     * @ORM\JoinColumn(name="ID_Event", referencedColumnName="id", nullable=true)
     */
    private $iDEvent;


    /**
     *  User Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->iDContact = 1;
        $this->iDEvent = 1;
        $this->iDUserRole = 1;
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
     * Set iDContact
     *
     * @param integer $iDContact
     * @return Users
     */
    public function setIDContact($iDContact)
    {
        $this->iDContact = $iDContact;

        return $this;
    }

    /**
     * Get iDContact
     *
     * @return integer 
     */
    public function getIDContact()
    {
        return $this->iDContact;
    }

    /**
     * Set iDUserRole
     *
     * @param integer $iDUserRole
     * @return Users
     */
    public function setIDUserRole($iDUserRole)
    {
        $this->iDUserRole = $iDUserRole;

        return $this;
    }

    /**
     * Get iDUserRole
     *
     * @return integer 
     */
    public function getIDUserRole()
    {
        return $this->iDUserRole;
    }

    /**
     * Set userEmailAddress
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        parent::setEmail($email);
        $this->setUsername($email);

        return $this;
    }

    public function setEmailCanonical($emailCanonical)
    {
        parent::setUsernameCanonical($emailCanonical);
        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * Get userEmailAddress
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set userPassword
     *
     * @param string $password
     * @return Users
     */
    public function setUserPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set iDEvent
     *
     * @param integer $iDEvent
     * @return Users
     */
    public function setIDEvent($iDEvent)
    {
        $this->iDEvent = $iDEvent;

        return $this;
    }

    /**
     * Get iDEvent
     *
     * @return integer 
     */
    public function getIDEvent()
    {
        return $this->iDEvent;
    }

}
