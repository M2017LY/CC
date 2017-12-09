<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 */
class Company
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
     * @ORM\Column(name="registrationNo", type="string", length=15)
     */
    private $registrationNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Incorporated", type="date")
     */
    private $incorporated;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=50)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=50)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="address3", type="string", length=50)
     */
    private $address3;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=10)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="address4", type="string", length=50)
     */
    private $address4;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="accountsDate", type="date")
     */
    private $accountsDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="accountsDue", type="date")
     */
    private $accountsDue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="confirmation", type="date")
     */
    private $confirmation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="confirmationDue", type="date")
     */
    private $confirmationDue;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * @return Company
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
     * Set registrationNo
     *
     * @param string $registrationNo
     *
     * @return Company
     */
    public function setRegistrationNo($registrationNo)
    {
        $this->registrationNo = $registrationNo;

        return $this;
    }

    /**
     * Get registrationNo
     *
     * @return string
     */
    public function getRegistrationNo()
    {
        return $this->registrationNo;
    }

    /**
     * Set incorporated
     *
     * @param \DateTime $incorporated
     *
     * @return Company
     */
    public function setIncorporated($incorporated)
    {
        $this->incorporated = $incorporated;

        return $this;
    }

    /**
     * Get incorporated
     *
     * @return \DateTime
     */
    public function getIncorporated()
    {
        return $this->incorporated;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Company
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Company
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     *
     * @return Company
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Company
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set address4
     *
     * @param string $address4
     *
     * @return Company
     */
    public function setAddress4($address4)
    {
        $this->address4 = $address4;

        return $this;
    }

    /**
     * Get address4
     *
     * @return string
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Company
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Company
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set accountsDate
     *
     * @param \DateTime $accountsDate
     *
     * @return Company
     */
    public function setAccountsDate($accountsDate)
    {
        $this->accountsDate = $accountsDate;

        return $this;
    }

    /**
     * Get accountsDate
     *
     * @return \DateTime
     */
    public function getAccountsDate()
    {
        return $this->accountsDate;
    }

    /**
     * Set accountsDue
     *
     * @param \DateTime $accountsDue
     *
     * @return Company
     */
    public function setAccountsDue($accountsDue)
    {
        $this->accountsDue = $accountsDue;

        return $this;
    }

    /**
     * Get accountsDue
     *
     * @return \DateTime
     */
    public function getAccountsDue()
    {
        return $this->accountsDue;
    }

    /**
     * Set confirmation
     *
     * @param \DateTime $confirmation
     *
     * @return Company
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Get confirmation
     *
     * @return \DateTime
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Set confirmationDue
     *
     * @param \DateTime $confirmationDue
     *
     * @return Company
     */
    public function setConfirmationDue($confirmationDue)
    {
        $this->confirmationDue = $confirmationDue;

        return $this;
    }

    /**
     * Get confirmationDue
     *
     * @return \DateTime
     */
    public function getConfirmationDue()
    {
        return $this->confirmationDue;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Company
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
