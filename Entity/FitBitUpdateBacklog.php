<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Low Priority Update Backlog Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_update_backlog")
 */
class FitBitUpdateBacklog
{
	/**
	 * @var int The numeric ID for this record
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this subscription update is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitUpdateBacklog")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var string The FitBit end point that requires updating
	 * @ORM\Column(type="string", length=30, nullable=false)
	 */
	protected $endPoint;
	/**
	 * @var \DateTime The start date for this update backlog entry
	 * @ORM\Column(type="date", nullable=false)
	 */
	protected $startDate;
	/**
	 * @var \DateTime The end date for this update backlog entry
	 * @ORM\Column(type="date", nullable=false)
	 */
	protected $endDate;
	/**
	 * @var \DateTime The timestamp this update was actioned
	 * @ORM\Column(type="datetime", nullable=false)
	 */
	protected $updateTimestamp;
	/**
	 * @var FitBitRequestLog The request log entry that performed this update
	 * @ORM\OneToOne(targetEntity="FitBitRequestLog", inversedBy="FitBitUpdateBacklog")
	 * @ORM\JoinColumn(name="fitbitRequestId", referencedColumnName="id")
	 */
	protected $FitBitRequestLog;

	/**
	 * Get the ID for this FitBit Update Backlog
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Update Backlog
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Update Backlog
	 *
	 * @param FitBitUser $user The FitBit User object to associate with this Update
	 *
	 * @return self
	 */
	public function setFitBitUser(FitBitUser $user)
	{
		$this->FitBitUser = $user;
		return $this;
	}

	/**
	 * Get the Request End point to be updated
	 *
	 * @return string
	 */
	public function getEndPoint()
	{
		return $this->endPoint;
	}

	/**
	 * Set the Request End point to be updated
	 *
	 * @param string $endPoint
	 *
	 * @return self
	 */
	public function setEndPoint($endPoint)
	{
		$this->endPoint = $endPoint;
		return $this;
	}

	/**
	 * Get the start date
	 *
	 * @return \DateTime
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}

	/**
	 * Set the start date
	 *
	 * @param \DateTime $date
	 *
	 * @return self
	 */
	public function setStartDate(\DateTime $date)
	{
		$this->startDate = $date;

		return $this;
	}

	/**
	 * Get the send date
	 *
	 * @return \DateTime
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}

	/**
	 * Set the end date
	 *
	 * @param \DateTime $date
	 *
	 * @return self
	 */
	public function setEndDate(\DateTime $date)
	{
		$this->endDate = $date;

		return $this;
	}

	/**
	 * Get the timestamp of the update
	 *
	 * @return \DateTime
	 */
	public function getUpdateTimestamp()
	{
		return $this->updateTimestamp;
	}

	/**
	 * Set the timestamp of the update
	 *
	 * @param \DateTime $timestamp
	 *
	 * @return self
	 */
	public function setUpdateTimestamp(\DateTime $timestamp)
	{
		$this->updateTimestamp = $timestamp;

		return $this;
	}

	/**
	 * Get the request log entry that actioned this update
	 *
	 * @return FitBitRequestLog
	 */
	public function getFitBitRequestLog()
	{
		return $this->FitBitRequestLog;
	}

	/**
	 * Set the request log entry that actioned this update
	 *
	 * @param FitBitRequestLog $log
	 *
	 * @return self
	 */
	public function setFitBitRequestLog(FitBitRequestLog $log)
	{
		$this->FitBitRequestLog = $log;

		return $this;
	}
}