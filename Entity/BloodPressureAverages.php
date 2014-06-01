<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_blood_pressure_averages")
 */
class BloodPressureAverages
{
    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $diastolic;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $systolic;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    private $condition;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="BloodPressureAverages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return BloodPressureAverages
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set diastolic
     *
     * @param integer $diastolic
     * @return BloodPressureAverages
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
     * @return BloodPressureAverages
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
     * Set condition
     *
     * @param string $condition
     * @return BloodPressureAverages
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return string 
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return BloodPressureAverages
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
