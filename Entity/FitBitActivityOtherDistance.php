<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Activity Other Distance Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_activity_distances_other")
 */
class FitBitActivityOtherDistance
{
	/**
	 * @var int Numeric ID for this activity distance
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this distance set is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitActivityOtherDistance")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date this record was logged with FitBit
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $recordDate;
	/**
	 * @var string Name of the distance measurement
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $name;
	/**
	 * @var int Distance
	 * @ORM\Column(type="int", nullable=true)
	 */
	protected $distance;

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
	 * Get the FitBit Distance Name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the FitBit Distance Name
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
	 * Get the FitBit Distance
	 *
	 * @return int
	 */
	public function getDistance()
	{
		return $this->distance;
	}

	/**
	 * Set the FitBit Distance
	 *
	 * @param int $distance
	 *
	 * @return self
	 */
	public function setDistance($distance)
	{
		$this->distance = $distance;
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