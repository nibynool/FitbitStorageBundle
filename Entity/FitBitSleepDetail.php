<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Sleep Detail Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_sleep_detail")
 */
class FitBitSleepDetail
{
	/**
	 * @var FitBitSleep The FitBit sleep this record is for
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="FitBitSleep", inversedBy="FitBitSleepDetails")
	 * @ORM\JoinColumn(name="fitbitSleepId", referencedColumnName="id")
	 */
	protected $FitBitSleep;
	/**
	 * @var \DateTime The time this record is for
	 * @ORM\Id
	 * @ORM\Column(type="time", nullable=false)
	 */
	protected $time;
	/**
	 * @var FitBitSleepType The FitBit sleep type for this record
	 * @ORM\ManyToOne(targetEntity="FitBitSleepType", inversedBy="FitBitSleepDetails")
	 * @ORM\JoinColumn(name="fitbitSleepTypeId", referencedColumnName="id")
	 */
	protected $FitBitSleepType;

	/**
	 * Get the FitBit Sleep entity for this entry
	 *
	 * @return FitBitSleep
	 */
	public function getFitBitSleep()
	{
		return $this->FitBitSleep;
	}

	/**
	 * Set the FitBit Sleep entity for this entry
	 *
	 * @param FitBitSleep $sleep The Fit Bit sleep entry for this record
	 *
	 * @return self
	 */
	public function setFitBitSleep(FitBitSleep $sleep)
	{
		$this->FitBitSleep = $sleep;
		return $this;
	}

	/**
	 * Get Time stamp
	 *
	 * @return \DateTime
	 */
	public function getTime()
	{
		return $this->time;
	}

	/**
	 * Set Time Stamp
	 *
	 * @param \DateTime $time
	 *
	 * @return self
	 */
	public function setTime(\DateTime $time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * Get the FitBit Sleep type for this entry
	 *
	 * @return FitBitSleepType
	 */
	public function getFitBitSleepType()
	{
		return $this->FitBitSleepType;
	}

	/**
	 * Set the FitBit Sleep Type for this entry
	 *
	 * @param FitBitSleepType $type The FitBit sleep type for this record
	 *
	 * @return self
	 */
	public function setFitBitSleepType(FitBitSleepType $type)
	{
		$this->FitBitSleepType = $type;
		return $this;
	}
}