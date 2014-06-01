<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_heart_rates",
 *     indexes={
 *         @ORM\Index(name="tracker_idx", columns={"tracker"}),
 *         @ORM\Index(name="user_idx", columns={"user_id"}),
 *         @ORM\Index(name="date_idx", columns={"date"})
 *     }
 * )
 */
class HeartRates
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $tracker;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $heart_rate;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="HeartRates")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * Set id
     *
     * @param integer $id
     * @return HeartRates
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
     * Set date
     *
     * @param \DateTime $date
     * @return HeartRates
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
     * @return HeartRates
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
     * @return HeartRates
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
     * @return HeartRates
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
