<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Request Log Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_request_log")
 */
class FitBitRequestLog
{
	/**
	 * @var int The numeric ID for this request record
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The user this record is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitRequestLog")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date and time of this request
	 * @ORM\Column(type="datetime", nullable=false)
	 */
	protected $requestTimestamp;
	/**
	 * @var string The end point requested from FitBit
	 * @ORM\Column(type="string", length=30, nullable=false)
	 */
	protected $endPoint;
	/**
	 * @var string The result of this request
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $result;
	/**
	 * @var FitBitSubscriptionUpdateLog The subscription log that triggered this update
	 * @ORM\OneToOne(targetEntity="FitBitSubscriptionUpdateLog", mappedBy="FitBitRequestLog")
	 */
	protected$FitBitSubscriptionUpdateLog;
	/**
	 * @var FitBitUpdateBacklog The update backlog that triggered this update
	 * @ORM\OneToOne(targetEntity="FitBitUpdateBacklog", mappedBy="FitBitRequestLog")
	 */
	protected$FitBitUpdateBacklog;

	/**
	 * Get the ID for this FitBit Request Log
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Request Log
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Request Log
	 *
	 * @param FitBitUser $user The FitBit User object to associate with this Profile
	 *
	 * @return self
	 */
	public function setFitBitUser(FitBitUser $user)
	{
		$this->FitBitUser = $user;
		return $this;
	}

	/**
	 * Get the Request End point
	 *
	 * @return string
	 */
	public function getEndPoint()
	{
		return $this->endPoint;
	}

	/**
	 * Set the Request End point
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
	 * Get the result
	 *
	 * @return string
	 */
	public function getResult()
	{
		return $this->result;
	}

	/**
	 * Set the result
	 *
	 * @param string $result
	 *
	 * @return self
	 */
	public function setResult($result)
	{
		$this->result = $result;
		return $this;
	}

	/**
	 * Get the Timestamp for this request
	 *
	 * @return \DateTime
	 */
	public function getRequestTimestamp()
	{
		return $this->requestTimestamp;
	}

	/**
	 * Set the Timestamp for this request
	 *
	 * @param \DateTime $datetime
	 *
	 * @return self
	 */
	public function setRequestTimestamp(\DateTime $datetime)
	{
		$this->requestTimestamp = $datetime;
		return $this;
	}

	/**
	 * Get the subscription update that triggered this request
	 *
	 * @return FitBitSubscriptionUpdateLog
	 */
	public function getFitBitSubscriptionUpdateLog()
	{
		return $this->FitBitSubscriptionUpdateLog;
	}

	/**
	 * Set the subscription update that triggered this request
	 *
	 * @param FitBitSubscriptionUpdateLog $log
	 *
	 * @return self
	 */
	public function setFitBitSubscriptionUpdateLog(FitBitSubscriptionUpdateLog $log)
	{
		$this->FitBitSubscriptionUpdateLog = $log;

		return $this;
	}

	/**
	 * Get the backlog update that triggered this request
	 *
	 * @return FitBitUpdateBacklog
	 */
	public function getFitBitUpdateBacklog()
	{
		return $this->FitBitUpdateBacklog;
	}

	/**
	 * Set the backlog update that triggered this request
	 *
	 * @param FitBitUpdateBacklog $log
	 *
	 * @return self
	 */
	public function setFitBitUpdateBacklog(FitBitUpdateBacklog $log)
	{
		$this->FitBitUpdateBacklog = $log;

		return $this;
	}
}