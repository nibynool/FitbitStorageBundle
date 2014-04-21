<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Storage Activity Summary Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_activity_summary")
 */
class FitBitActivitySummary
{
	/**
	 * @var int Numeric ID for this activity summary
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this summary is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitActivitySummary")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date this record was logged with FitBit
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $recordDate;
	/**
	 * @var int ActivityCalories
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $activityCalories;
	/**
	 * @var int Base Metabolic Rate Calories
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $baseMetabolicCalories;
	/**
	 * @var int Calories Burnt
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $caloriesBurnt;
	/**
	 * @var int Elevation
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $elevation;
	/**
	 * @var int Moderately Active Minutes
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $moderateMinutes;
	/**
	 * @var int Floors
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $floors;
	/**
	 * @var int Lightly Active Minutes
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $lightMinutes;
	/**
	 * @var int Marginal Calories
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $marginalCalories;
	/**
	 * @var int Sedentary Minutes
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $sedentaryMinutes;
	/**
	 * @var int Steps
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $steps;
	/**
	 * @var int Very Active Minutes
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $activeMinutes;

	/**
	 * Get the ID for this FitBit Activity Summary
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Activity Summary
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Activity Summary
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
	 * Get the FitBit Activity Calories
	 *
	 * @return int
	 */
	public function getActivityCalories()
	{
		return $this->activityCalories;
	}

	/**
	 * Set the FitBit Activity Calories
	 *
	 * @param int $calories
	 *
	 * @return self
	 */
	public function setActivityCalories($calories)
	{
		$this->activityCalories = $calories;
		return $this;
	}

	/**
	 * Get the FitBit Base Metabolic Rate Calories
	 *
	 * @return int
	 */
	public function getBaseMetabolicCalories()
	{
		return $this->baseMetabolicCalories;
	}

	/**
	 * Set the FitBit Base Metabolic Calories
	 *
	 * @param int $calories
	 *
	 * @return self
	 */
	public function setBaseMetabolicCalories($calories)
	{
		$this->baseMetabolicCalories = $calories;
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
	 * Get Elevation
	 *
	 * @return int
	 */
	public function getElevation()
	{
		return $this->elevation;
	}

	/**
	 * Set Elevation
	 *
	 * @param int $elevation
	 *
	 * @return self
	 */
	public function setElevation($elevation)
	{
		$this->elevation = $elevation;
		return $this;
	}

	/**
	 * Get Moderately Active Minutes
	 *
	 * @return int
	 */
	public function getModerateMinutes()
	{
		return $this->moderateMinutes;
	}

	/**
	 * Set Moderately Active Minutes
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setModerateMinutes($minutes)
	{
		$this->moderateMinutes = $minutes;
		return $this;
	}

	/**
	 * Get Floors
	 *
	 * @return int
	 */
	public function getFloors()
	{
		return $this->floors;
	}

	/**
	 * Set Floors
	 *
	 * @param int $floors
	 *
	 * @return self
	 */
	public function setFloors($floors)
	{
		$this->floors = $floors;
		return $this;
	}

	/**
	 * Get Light Minutes
	 *
	 * @return int
	 */
	public function getLightMinutes()
	{
		return $this->lightMinutes;
	}

	/**
	 * Set Light Minutes
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setLightMinutes($minutes)
	{
		$this->lightMinutes = $minutes;
		return $this;
	}

	/**
	 * Get Marginal Calories
	 *
	 * @return int
	 */
	public function getMarginalCalories()
	{
		return $this->marginalCalories;
	}

	/**
	 * Set Marginal Calories
	 *
	 * @param int $calories
	 *
	 * @return self
	 */
	public function setMarginalCalories($calories)
	{
		$this->marginalCalories = $calories;
		return $this;
	}

	/**
	 * Get Sedentary Minutes
	 *
	 * @return int
	 */
	public function getSedentaryMinutes()
	{
		return $this->sedentaryMinutes;
	}

	/**
	 * Set Sedentary Minutes
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setSedentaryMinutes($minutes)
	{
		$this->sedentaryMinutes = $minutes;
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
	 * Set Steps
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
	 * Get Active Minutes
	 *
	 * @return int
	 */
	public function getActiveMinutes()
	{
		return $this->activeMinutes;
	}

	/**
	 * Set ActiveMinutes
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setActiveMinutes($minutes)
	{
		$this->activeMinutes = $minutes;
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