<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_glucose")
 */
class Glucose
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
     * @ORM\Column(type="time", nullable=false)
     */
    private $time;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $glucose;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Glucose")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Glucose
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
     * @return Glucose
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
     * Set time
     *
     * @param \DateTime $time
     * @return Glucose
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set glucose
     *
     * @param string $glucose
     * @return Glucose
     */
    public function setGlucose($glucose)
    {
        $this->glucose = $glucose;

        return $this;
    }

    /**
     * Get glucose
     *
     * @return string 
     */
    public function getGlucose()
    {
        return $this->glucose;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Glucose
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
