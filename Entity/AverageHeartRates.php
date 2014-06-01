<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_heart_rate_averages")
 */
class AverageHeartRates
{
    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    private $tracker;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $heart_rate;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="AverageHeartRates")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return AverageHeartRates
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
     * Set tracker
     *
     * @param string $tracker
     * @return AverageHeartRates
     */
    public function setTracker($tracker)
    {
        $this->tracker = $tracker;

        return $this;
    }

    /**
     * Get tracker
     *
     * @return string 
     */
    public function getTracker()
    {
        return $this->tracker;
    }

    /**
     * Set heart_rate
     *
     * @param integer $heartRate
     * @return AverageHeartRates
     */
    public function setHeartRate($heartRate)
    {
        $this->heart_rate = $heartRate;

        return $this;
    }

    /**
     * Get heart_rate
     *
     * @return integer 
     */
    public function getHeartRate()
    {
        return $this->heart_rate;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return AverageHeartRates
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
