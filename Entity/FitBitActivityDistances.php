<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Summary Activity Distances Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_activity_distances")
 */
class FitBitActivityDistances
{
	/**
	 * @var int Numeric ID for this activity distance
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this distance set is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitActivityDistances")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date this record was logged with FitBit
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $recordDate;
	/**
	 * @var int Tracker distance
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $tracker;
	/**
	 * @var int Logged Activities Distance
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $loggedActivities;
	/**
	 * @var int Total distance
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $total;
	/**
	 * @var int Very Active Distance
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $veryActive;
	/**
	 * @var int Moderately Active Distance
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $moderatelyActive;
	/**
	 * @var int Lightly Active Distance
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $lightlyActive;
	/**
	 * @var int Sedentary Distance
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $sedentary;

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
	 * Get the FitBit Tracker Distance
	 *
	 * @return int
	 */
	public function getTracker()
	{
		return $this->tracker;
	}

	/**
	 * Set the FitBit Tracker Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setTracker($distance)
	{
		$this->tracker = $distance;
		return $this;
	}

	/**
	 * Get the FitBit Logged Activities Distance
	 *
	 * @return int
	 */
	public function getLoggedActivities()
	{
		return $this->loggedActivities;
	}

	/**
	 * Set the FitBit Logged Activities Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setLoggedActivities($distance)
	{
		$this->loggedActivities = $distance;
		return $this;
	}

	/**
	 * Get Total Distance
	 *
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * Set Total Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setTotal($distance)
	{
		$this->total = $distance;
		return $this;
	}

	/**
	 * Get Very Active Distance
	 *
	 * @return int
	 */
	public function getVeryActive()
	{
		return $this->veryActive;
	}

	/**
	 * Set Very Active Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setVeryActive($distance)
	{
		$this->veryActive = $distance;
		return $this;
	}

	/**
	 * Get Moderately Active Distance
	 *
	 * @return int
	 */
	public function getModeratelyActive()
	{
		return $this->moderatelyActive;
	}

	/**
	 * Set Moderately Active Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setModeratelyActive($distance)
	{
		$this->moderatelyActive = $distance;
		return $this;
	}

	/**
	 * Get Lightly Active Distance
	 *
	 * @return int
	 */
	public function getLightlyActive()
	{
		return $this->lightlyActive;
	}

	/**
	 * Set Lightly Active Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setLightlyActive($distance)
	{
		$this->lightlyActive = $distance;
		return $this;
	}

	/**
	 * Get Sedentary Distance
	 *
	 * @return int
	 */
	public function getSedentary()
	{
		return $this->sedentary;
	}

	/**
	 * Set Sedentary Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setSedentary($distance)
	{
		$this->sedentary = $distance;
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