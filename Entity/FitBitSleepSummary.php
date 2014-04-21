<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Sleep Summary Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_sleep_summary")
 */
class FitBitSleepSummary
{
	/**
	 * @var int Numeric ID for this sleep summary record
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
	 * @var int The Time spent asleep
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $timeAsleep;
	/**
	 * @var int Number of sleep records
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $sleepRecords;
	/**
	 * @var int The time in bed
	 * @ORM\Column(type="int", nullable=false)
	 */
	protected $timeInBed;
	/**
	 * @var \DateTime The date for this summary
	 * @ORM\Column(type="date", nullable=false)
	 */
	protected $date;

	/**
	 * Get the ID for this FitBit Sleep Summary
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Sleep Summary
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Sleep Summary
	 *
	 * @param FitBitUser $user The FitBit User object to associate with this Sleep Summary
	 *
	 * @return self
	 */
	public function setFitBitUser(FitBitUser $user)
	{
		$this->FitBitUser = $user;
		return $this;
	}

	/**
	 * Get Time Asleep
	 *
	 * @return int
	 */
	public function getTimeAsleep()
	{
		return $this->timeAsleep;
	}

	/**
	 * Set Time Asleep
	 *
	 * @param int $minutes
	 *
	 * @return self
	 */
	public function setTimeAsleep($minutes)
	{
		$this->timeAsleep = $minutes;
		return $this;
	}

	/**
	 * Get Number of Sleep Records
	 *
	 * @return int
	 */
	public function getSleepRecords()
	{
		return $this->sleepRecords;
	}

	/**
	 * Set Sleep Records
	 *
	 * @param int $count
	 *
	 * @return self
	 */
	public function setSleepRecords($count)
	{
		$this->sleepRecords = $count;
		return $this;
	}

	/**
	 * Get Time in Bed
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
	 * Get Date for this record
	 *
	 * @return \DateTime
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Set Date for this record
	 *
	 * @param \DateTime $date
	 *
	 * @return self
	 */
	public function setDate(\DateTime $date)
	{
		$this->date = $date;
		return $this;
	}
}