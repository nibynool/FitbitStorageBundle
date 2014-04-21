<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Subscription Update Log Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_subscription_update_log")
 */
class FitBitSubscriptionUpdateLog
{
	/**
	 * @var int The numeric ID for this record
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this subscription update is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitSubscriptionUpdateLog")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date and time we were notified about this update
	 * @ORM\Column(type="datetime", nullable=false)
	 */
	protected $notificationTimestamp;
	/**
	 * @var string The FitBit end point that has an update available
	 * @ORM\Column(type="string", length=30, nullable=false)
	 */
	protected $endPoint;
	/**
	 * @var \DateTime The date FitBit has reported has having an update available
	 * @ORM\Column(type="date", nullable=false)
	 */
	protected $updateDate;
	/**
	 * @var \DateTime The timestamp this update was actioned
	 * @ORM\Column(type="datetime", nullable=false)
	 */
	protected $updateTimestamp;
	/**
	 * @var FitBitRequestLog The request log entry that performed this update
	 * @ORM\OneToOne(targetEntity="FitBitRequestLog", inversedBy="FitBitSubscriptionUpdateLog")
	 * @ORM\JoinColumn(name="fitbitRequestLogId", referencedColumname="id")
	 */
	protected $FitBitRequestLog;

	/**
	 * Get the ID for this FitBit Subscription Update Log
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Subscription Update Log
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Subscription Update Log
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
	 * Get the notification timestamp
	 *
	 * @return \DateTime
	 */
	public function getNotificationTimestamp()
	{
		return $this->notificationTimestamp;
	}

	/**
	 * Set the notification timestamp
	 *
	 * @param \DateTime $timestamp
	 *
	 * @return self
	 */
	public function setNotificationTimestamp(\DateTime $timestamp)
	{
		$this->notificationTimestamp = $timestamp;

		return $this;
	}

	/**
	 * Get the update date
	 *
	 * @return \DateTime
	 */
	public function getUpdateDate()
	{
		return $this->updateDate;
	}

	/**
	 * Set the update date
	 *
	 * @param \DateTime $date
	 *
	 * @return self
	 */
	public function setUpdateDate(\DateTime $date)
	{
		$this->updateDate = $date;

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