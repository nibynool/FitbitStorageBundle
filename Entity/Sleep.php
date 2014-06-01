<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_sleep", indexes={@ORM\Index(name="user_idx", columns={"user_id"})})
 */
class Sleep
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=8)
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $awake_count;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $awake_duration;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $awakenings_count;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $duration;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $efficiency;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $is_main_sleep;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $minutes_after_wakeup;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $minutes_asleep;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $minutes_awake;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $minutes_to_fall_asleep;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $restless_count;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $restless_duration;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $start_time;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $time_in_bed;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\SleepDetails", mappedBy="Sleep")
     */
    private $Details;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Sleeps")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Details = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Sleep
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
     * Set awake_count
     *
     * @param integer $awakeCount
     * @return Sleep
     */
    public function setAwakeCount($awakeCount)
    {
        $this->awake_count = $awakeCount;

        return $this;
    }

    /**
     * Get awake_count
     *
     * @return integer 
     */
    public function getAwakeCount()
    {
        return $this->awake_count;
    }

    /**
     * Set awake_duration
     *
     * @param integer $awakeDuration
     * @return Sleep
     */
    public function setAwakeDuration($awakeDuration)
    {
        $this->awake_duration = $awakeDuration;

        return $this;
    }

    /**
     * Get awake_duration
     *
     * @return integer 
     */
    public function getAwakeDuration()
    {
        return $this->awake_duration;
    }

    /**
     * Set awakenings_count
     *
     * @param integer $awakeningsCount
     * @return Sleep
     */
    public function setAwakeningsCount($awakeningsCount)
    {
        $this->awakenings_count = $awakeningsCount;

        return $this;
    }

    /**
     * Get awakenings_count
     *
     * @return integer 
     */
    public function getAwakeningsCount()
    {
        return $this->awakenings_count;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Sleep
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set efficiency
     *
     * @param integer $efficiency
     * @return Sleep
     */
    public function setEfficiency($efficiency)
    {
        $this->efficiency = $efficiency;

        return $this;
    }

    /**
     * Get efficiency
     *
     * @return integer 
     */
    public function getEfficiency()
    {
        return $this->efficiency;
    }

    /**
     * Set is_main_sleep
     *
     * @param boolean $isMainSleep
     * @return Sleep
     */
    public function setIsMainSleep($isMainSleep)
    {
        $this->is_main_sleep = $isMainSleep;

        return $this;
    }

    /**
     * Get is_main_sleep
     *
     * @return boolean 
     */
    public function getIsMainSleep()
    {
        return $this->is_main_sleep;
    }

    /**
     * Set minutes_after_wakeup
     *
     * @param integer $minutesAfterWakeup
     * @return Sleep
     */
    public function setMinutesAfterWakeup($minutesAfterWakeup)
    {
        $this->minutes_after_wakeup = $minutesAfterWakeup;

        return $this;
    }

    /**
     * Get minutes_after_wakeup
     *
     * @return integer 
     */
    public function getMinutesAfterWakeup()
    {
        return $this->minutes_after_wakeup;
    }

    /**
     * Set minutes_asleep
     *
     * @param integer $minutesAsleep
     * @return Sleep
     */
    public function setMinutesAsleep($minutesAsleep)
    {
        $this->minutes_asleep = $minutesAsleep;

        return $this;
    }

    /**
     * Get minutes_asleep
     *
     * @return integer 
     */
    public function getMinutesAsleep()
    {
        return $this->minutes_asleep;
    }

    /**
     * Set minutes_awake
     *
     * @param integer $minutesAwake
     * @return Sleep
     */
    public function setMinutesAwake($minutesAwake)
    {
        $this->minutes_awake = $minutesAwake;

        return $this;
    }

    /**
     * Get minutes_awake
     *
     * @return integer 
     */
    public function getMinutesAwake()
    {
        return $this->minutes_awake;
    }

    /**
     * Set minutes_to_fall_asleep
     *
     * @param integer $minutesToFallAsleep
     * @return Sleep
     */
    public function setMinutesToFallAsleep($minutesToFallAsleep)
    {
        $this->minutes_to_fall_asleep = $minutesToFallAsleep;

        return $this;
    }

    /**
     * Get minutes_to_fall_asleep
     *
     * @return integer 
     */
    public function getMinutesToFallAsleep()
    {
        return $this->minutes_to_fall_asleep;
    }

    /**
     * Set restless_count
     *
     * @param integer $restlessCount
     * @return Sleep
     */
    public function setRestlessCount($restlessCount)
    {
        $this->restless_count = $restlessCount;

        return $this;
    }

    /**
     * Get restless_count
     *
     * @return integer 
     */
    public function getRestlessCount()
    {
        return $this->restless_count;
    }

    /**
     * Set restless_duration
     *
     * @param integer $restlessDuration
     * @return Sleep
     */
    public function setRestlessDuration($restlessDuration)
    {
        $this->restless_duration = $restlessDuration;

        return $this;
    }

    /**
     * Get restless_duration
     *
     * @return integer 
     */
    public function getRestlessDuration()
    {
        return $this->restless_duration;
    }

    /**
     * Set start_time
     *
     * @param \DateTime $startTime
     * @return Sleep
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;

        return $this;
    }

    /**
     * Get start_time
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set time_in_bed
     *
     * @param integer $timeInBed
     * @return Sleep
     */
    public function setTimeInBed($timeInBed)
    {
        $this->time_in_bed = $timeInBed;

        return $this;
    }

    /**
     * Get time_in_bed
     *
     * @return integer 
     */
    public function getTimeInBed()
    {
        return $this->time_in_bed;
    }

    /**
     * Add Details
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SleepDetails $details
     * @return Sleep
     */
    public function addDetail(\Nibynool\FitbitStorageBundle\Entity\SleepDetails $details)
    {
        $this->Details[] = $details;

        return $this;
    }

    /**
     * Remove Details
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SleepDetails $details
     */
    public function removeDetail(\Nibynool\FitbitStorageBundle\Entity\SleepDetails $details)
    {
        $this->Details->removeElement($details);
    }

    /**
     * Get Details
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Sleep
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
