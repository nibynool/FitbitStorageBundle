<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * FitBit Sleep Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_sleep")
 */
class FitBitSleep
{
	/**
	 * @var int Numeric ID for this sleep record
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this record is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitSleep")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var int The Fitbit Log ID
	 * @ORM\Column(type="bigint", nullable=true)
	 */
	protected $logId;
	/**
	 * @var bool Is this the main FitBit Sleep
	 * @ORM\Column(type="bool", nullable=false)
	 */
	protected $mainSleep;
	/**
	 * @var int The FitBit Sleep Efficiency number
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $efficiency;
	/**
	 * @var \DateTime The start time of this FitBit Sleep record
	 * @ORM\Column(type="datetime", nullable=false)
	 */
	protected $startTime;
	/**
	 * @var int The FitBit Sleep duration
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $duration;
	/**
	 * @var int The FitBit Minutes to fall asleep
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $minutesToSleep;
	/**
	 * @var int The FitBit Minutes of sleep
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $minutesAsleep;
	/**
	 * @var int The FitBit Minutes awake
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $minutesAwake;
	/**
	 * @var int The FitBit Minutes after wakeup
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $minutesAfterWakeup;
	/**
	 * @var int The FitBit Number of times awake
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $timesAwake;
	/**
	 * @var int The FitBit Number of minutes awake
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $timeAwake;
	/**
	 * @var int The FitBit Number of times restless
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $timesRestless;
	/**
	 * @var int The FitBit Number of minutes restless
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $timeRestless;
	/**
	 * @var int The FitBit Number of minutes in Bed
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $timeInBed;
	/**
	 * @var ArrayCollection An array collection of Minutes for this sleep record
	 * @ORM\OneToMany(targetEntity="FitBitSleepDetail", mappedBy="FitBitSleep")
	 */
	protected $FitBitSleepDetail;

	/**
	 * Class constructor
	 */
	public function __construct()
	{
		$this->FitBitSleepDetail = new ArrayCollection();
	}

	/**
	 * Get the ID for this FitBit Activity
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Activity
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Activity
	 *
	 * @param FitBitUser $user The FitBit User object to associate with this Activity
	 *
	 * @return self
	 */
	public function setFitBitUser(FitBitUser $user)
	{
		$this->FitBitUser = $user;
		return $this;
	}

	/**
	 * Get Log ID
	 *
	 * @return int
	 */
	public function getLogId()
	{
		return $this->logId;
	}

	/**
	 * Set Log ID
	 *
	 * @param int $id
	 *
	 * @return self
	 */
	public function setLogId($id)
	{
		$this->logId = $id;
		return $this;
	}

	/**
	 * Get Is Main Sleep
	 *
	 * @return bool
	 */
	public function getMainSleep()
	{
		return $this->mainSleep;
	}

	/**
	 * Set Is Main Sleep
	 *
	 * @param bool $bool
	 *
	 * @return self
	 */
	public function setMainSleep($bool)
	{
		$this->mainSleep = $bool;
		return $this;
	}

	/**
	 * Get Sleep Efficiency
	 *
	 * @return int
	 */
	public function getEfficiency()
	{
		return $this->efficiency;
	}

	/**
	 * Set Sleep Efficiency
	 *
	 * @param int $efficiency
	 *
	 * @return self
	 */
	public function setEfficiency($efficiency)
	{
		$this->efficiency = $efficiency;
		return $this;
	}

	/**
	 * Get Sleep Start Time
	 *
	 * @return \DateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}

	/**
	 * Set Sleep start time
	 *
	 * @param \DateTime $time
	 *
	 * @return self
	 */
	public function setStartTime(\DateTime $time)
	{
		$this->startTime = $time;
		return $this;
	}

	/**
	 * Get Sleep Duration
	 *
	 * @return int
	 */
	public function getDuration()
	{
		return $this->duration;
	}

	/**
	 * Set Sleep Duration
	 *
	 * @param int $seconds
	 *
	 * @return self
	 */
	public function setDuration($seconds)
	{
		$this->duration = $seconds;
		return $this;
	}

	/**
	 * Get Time to fall asleep
	 *
	 * @return int
	 */
	public function getMinutesToSleep()
	{
		return $this->minutesToSleep;
	}

	/**
	 * Set Time to fall asleep
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setMinutesToSleep($minutes)
	{
		$this->minutesToSleep = $minutes;
		return $this;
	}

	/**
	 * Get Time Asleep
	 *
	 * @return int
	 */
	public function getMinutesAsleep()
	{
		return $this->minutesAsleep;
	}

	/**
	 * Set Time Asleep
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setMinutesAsleep($minutes)
	{
		$this->minutesAsleep = $minutes;
		return $this;
	}

	/**
	 * Get Time Awake
	 *
	 * @return int
	 */
	public function getMinutesAwake()
	{
		return $this->minutesAwake;
	}

	/**
	 * Set Minutes Awake
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setMinutesAwake($minutes)
	{
		$this->minutesAwake = $minutes;
		return $this;
	}

	/**
	 * Get Time In Bed After Wakeup
	 *
	 * @return int
	 */
	public function getMinutesAfterWakeup()
	{
		return $this->minutesAfterWakeup;
	}

	/**
	 * Set Time In Bed After Wakeup
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setMinutesAfterWakeup($minutes)
	{
		$this->minutesAfterWakeup = $minutes;
		return $this;
	}

	/**
	 * Get Times Awake
	 *
	 * @return int
	 */
	public function getTimesAwake()
	{
		return $this->timesAwake;
	}

	/**
	 * Set Times Awake
	 *
	 * @param int $count
	 *
	 * @return self
	 */
	public function setTimesAwake($count)
	{
		$this->timesAwake = $count;
		return $this;
	}

	/**
	 * Get Time Awake
	 *
	 * @return int
	 */
	public function getTimeAwake()
	{
		return $this->timeAwake;
	}

	/**
	 * Set Time Awake
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setTimeAwake($minutes)
	{
		$this->timeAwake = $minutes;
		return $this;
	}

	/**
	 * Get Times Restless
	 *
	 * @return int
	 */
	public function getTimesRestless()
	{
		return $this->timesRestless;
	}

	/**
	 * Set Times Restless
	 *
	 * @param int $count
	 *
	 * @return self
	 */
	public function setTimesRestless($count)
	{
		$this->timesRestless = $count;
		return $this;
	}

	/**
	 * Get Time Restless
	 *
	 * @return int
	 */
	public function getTimeRestless()
	{
		return $this->timeRestless;
	}

	/**
	 * Set Time Restless
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setTimeRestless($minutes)
	{
		$this->timeRestless = $minutes;
		return $this;
	}

	/**
	 * Get Time In Bed
	 *
	 * @return int
	 */
	public function getTimeInBed()
	{
		return $this->timeInBed;
	}

	/**
	 * Set Time In Bed
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setTimeInBed($minutes)
	{
		$this->timeInBed = $minutes;
		return $this;
	}

	/**
	 * Add a FitBit Sleep Detail to this sleep record
	 *
	 * @param FitBitSleepDetail $detail
	 *
	 * @return self
	 */
	public function addFitBitSleepDetail(FitBitSleepDetail $detail)
	{
		$this->FitBitSleepDetail[] = $detail;
		return $this;
	}

	/**
	 * Remove a FitBit Sleep Detail from this sleep record
	 *
	 * @param FitBitSleepDetail $detail
	 *
	 * @return self
	 */
	public function removeFitBitSleepDetail(FitBitSleepDetail $detail)
	{
		$this->FitBitSleepDetail->removeElement($detail);
		return $this;
	}

	/**
	 * Get the FitBit Sleep Details from this sleep record
	 *
	 * @return ArrayCollection
	 */
	public function getFitBitSleepDetails()
	{
		return $this->FitBitSleepDetail;
	}
}