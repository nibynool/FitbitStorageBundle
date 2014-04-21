<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Storage Activity Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_activity")
 */
class FitBitActivity
{
	/**
	 * @var int Numeric ID for this activity record
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this record is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitActivity")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date this record was logged with FitBit
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $recordDate;
	/**
	 * @var int Activity ID
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $activityId;
	/**
	 * @var int Activity Parent ID
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $activityParentId;
	/**
	 * @var int Calories Burnt
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $caloriesBurnt;
	/**
	 * @var string Activity Description
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $description;
	/**
	 * @var int Duration of activity
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $duration;
	/**
	 * @var bool Has start time
	 * @ORM\Column(type="boolean", nullable=false)
	 */
	protected $hasStartTime;
	/**
	 * @var bool Is favourite
	 * @ORM\Column(type="boolean", nullable=false)
	 */
	protected $isFavorite;
	/**
	 * @var int FitBit Log ID
	 * @ORM\Column(type="bigint", nullable=false)
	 */
	protected $logId;
	/**
	 * @var string Name of the activity
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $name;
	/**
	 * @var \DateTime Start time
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	protected $startTime;
	/**
	 * @var int Steps
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $steps;

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
	 * Get the FitBit Activity ID
	 *
	 * @return int
	 */
	public function getActivityId()
	{
		return $this->activityId;
	}

	/**
	 * Set the FitBit Activity ID
	 *
	 * @param int $id
	 *
	 * @return self
	 */
	public function setActivityId($id)
	{
		$this->activityId = $id;
		return $this;
	}

	/**
	 * Get the FitBit Activity's Parent ID
	 *
	 * @return int
	 */
	public function getActivityParentId()
	{
		return $this->activityParentId;
	}

	/**
	 * Set the FitBit Activity's Parent ID
	 *
	 * @param int $id
	 *
	 * @return self
	 */
	public function setActivityParentId($id)
	{
		$this->activityParentId = $id;
		return $this;
	}

	/**
	 * Get Calories Burnt
	 *
	 * @return int
	 */
	public function getCaloriesBurnt()
	{
		return $this->caloriesBurnt;
	}

	/**
	 * Set Calories Burnt
	 *
	 * @param int $calories
	 *
	 * @return self
	 */
	public function setCaloriesBurnt($calories)
	{
		$this->caloriesBurnt = $calories;
		return $this;
	}

	/**
	 * Get Description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set Description
	 *
	 * @param string $description
	 *
	 * @return self
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * Get Duration
	 *
	 * @return int
	 */
	public function getDuration()
	{
		return $this->duration;
	}

	/**
	 * Set Duration
	 *
	 * @param int $duration
	 *
	 * @return self
	 */
	public function setDuration($duration)
	{
		$this->duration = $duration;
		return $this;
	}

	/**
	 * Get Has Start Time
	 *
	 * @return boolean
	 */
	public function getHasStartTime()
	{
		return $this->hasStartTime;
	}

	/**
	 * Set Has Start Time
	 *
	 * @param bool $boolean
	 *
	 * @return self
	 */
	public function setHasStartTime($boolean)
	{
		$this->hasStartTime = $boolean;
		return $this;
	}

	/**
	 * Get Is Favorite
	 *
	 * @return boolean
	 */
	public function getIsFavorite()
	{
		return $this->isFavorite;
	}

	/**
	 * Set Is Favorite
	 *
	 * @param bool $boolean
	 *
	 * @return self
	 */
	public function setIsFavorite($boolean)
	{
		$this->isFavorite = $boolean;
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
	 * Get Activity Name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set Activity Name
	 *
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * Get Start Time
	 *
	 * @return \DateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}

	/**
	 * Set Start Time
	 *
	 * @param \DateTime $startTime
	 *
	 * @return self
	 */
	public function setStartTime(\DateTime $startTime)
	{
		$this->startTime = $startTime;
		return $this;
	}

	/**
	 * Get Steps
	 *
	 * @return int
	 */
	public function getSteps()
	{
		return $this->steps;
	}

	/**
	 * Set Activity Steps
	 *
	 * @param int $steps
	 *
	 * @return self
	 */
	public function setSteps($steps)
	{
		$this->steps = $steps;
		return $this;
	}

	/**
	 * Get the Date for this activity
	 *
	 * @return \DateTime
	 */
	public function getRecordDate()
	{
		return $this->recordDate;
	}

	/**
	 * Set the Date for this activity
	 *
	 * @param \DateTime $date
	 *
	 * @return self
	 */
	public function setRecordDate(\DateTime $date)
	{
		$this->recordDate = $date;
		return $this;
	}
}