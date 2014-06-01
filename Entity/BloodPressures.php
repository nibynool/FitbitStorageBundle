<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_blood_pressures", indexes={@ORM\Index(name="user_idx", columns={"user_id"})})
 */
class BloodPressures
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date_time;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $diastolic;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $systolic;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="BloodPressures")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * Set id
     *
     * @param integer $id
     * @return BloodPressures
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set date_time
     *
     * @param \DateTime $dateTime
     * @return BloodPressures
     */
    public function setDateTime($dateTime)
    {
        $this->date_time = $dateTime;

        return $this;
    }

    /**
     * Get date_time
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->date_time;
    }

    /**
     * Set diastolic
     *
     * @param integer $diastolic
     * @return BloodPressures
     */
    public function setDiastolic($diastolic)
    {
        $this->diastolic = $diastolic;

        return $this;
    }

    /**
     * Get diastolic
     *
     * @return integer 
     */
    public function getDiastolic()
    {
        return $this->diastolic;
    }

    /**
     * Set systolic
     *
     * @param integer $systolic
     * @return BloodPressures
     */
    public function setSystolic($systolic)
    {
        $this->systolic = $systolic;

        return $this;
    }

    /**
     * Get systolic
     *
     * @return integer 
     */
    public function getSystolic()
    {
        return $this->systolic;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return BloodPressures
     */
    public function setUser(\Nibynool\FitbitStorageBundle\Entity\Users $user)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->User;
    }
}
