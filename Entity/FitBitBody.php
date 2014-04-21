<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Storage Body Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_body")
 */
class FitBitBody
{
	/**
	 * @var int Numeric ID for this body record
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit user this record is for
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitBody")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var \DateTime The date this record was logged with FitBit
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $recordDate;
	/**
	 * @var float Bicep measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $bicep;
	/**
	 * @var float BMI measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $bmi;
	/**
	 * @var float Calf measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $calf;
	/**
	 * @var float Chest measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $chest;
	/**
	 * @var float Fat measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $fat;
	/**
	 * @var float Forearm measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $forearm;
	/**
	 * @var float Hips measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $hips;
	/**
	 * @var float Neck measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $neck;
	/**
	 * @var float Thigh measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $thigh;
	/**
	 * @var float Waist measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $waist;
	/**
	 * @var float Weight measurement
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $weight;

	/**
	 * Get the ID for this FitBit Body
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Body
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Body
	 *
	 * @param FitBitUser $user The FitBit User object to associate with this Body
	 *
	 * @return self
	 */
	public function setFitBitUser(FitBitUser $user)
	{
		$this->FitBitUser = $user;
		return $this;
	}

	/**
	 * Get the Biceps from FitBit
	 *
	 * @return float
	 */
	public function getBicep()
	{
		return $this->bicep;
	}

	/**
	 * Set the Bicep from FitBit
	 *
	 * @param float $bicep
	 *
	 * @return self
	 */
	public function setBicep($bicep)
	{
		$this->bicep = $bicep;
		return $this;
	}

	/**
	 * Get the BMI from FitBit
	 *
	 * @return float
	 */
	public function getBmi()
	{
		return $this->bmi;
	}

	/**
	 * Set the BMI from FitBit
	 *
	 * @param float $bmi
	 *
	 * @return self
	 */
	public function setBmi($bmi)
	{
		$this->bmi = $bmi;
		return $this;
	}

	/**
	 * Get the Calf from FitBit
	 *
	 * @return float
	 */
	public function getCalf()
	{
		return $this->calf;
	}

	/**
	 * Set the Calf from FitBit
	 *
	 * @param float $calf
	 *
	 * @return self
	 */
	public function setCalf($calf)
	{
		$this->calf = $calf;
		return $this;
	}

	/**
	 * Get the Chest from FitBit
	 *
	 * @return float
	 */
	public function getChest()
	{
		return $this->chest;
	}

	/**
	 * Set the Chest from FitBit
	 *
	 * @param float $chest
	 *
	 * @return self
	 */
	public function setChest($chest)
	{
		$this->chest = $chest;
		return $this;
	}

	/**
	 * Get the Fat from FitBit
	 *
	 * @return float
	 */
	public function getFat()
	{
		return $this->fat;
	}

	/**
	 * Set the Fat from FitBit
	 *
	 * @param float $fat
	 *
	 * @return self
	 */
	public function setFat($fat)
	{
		$this->fat = $fat;
		return $this;
	}

	/**
	 * Get the Forearm from FitBit
	 *
	 * @return float
	 */
	public function getForearm()
	{
		return $this->forearm;
	}

	/**
	 * Set the Forearm from FitBit
	 *
	 * @param float $forearm
	 *
	 * @return self
	 */
	public function setForearm($forearm)
	{
		$this->forearm = $forearm;
		return $this;
	}

	/**
	 * Get the Hips from FitBit
	 *
	 * @return float
	 */
	public function getHips()
	{
		return $this->hips;
	}

	/**
	 * Set the Hips from FitBit
	 *
	 * @param float $hips
	 *
	 * @return self
	 */
	public function setHips($hips)
	{
		$this->hips = $hips;
		return $this;
	}

	/**
	 * Get the Neck from FitBit
	 *
	 * @return float
	 */
	public function getNeck()
	{
		return $this->neck;
	}

	/**
	 * Set the Neck from FitBit
	 *
	 * @param float $neck
	 *
	 * @return self
	 */
	public function setNeck($neck)
	{
		$this->neck = $neck;
		return $this;
	}

	/**
	 * Get the Thighs from FitBit
	 *
	 * @return float
	 */
	public function getThigh()
	{
		return $this->thigh;
	}

	/**
	 * Set the Thigh from FitBit
	 *
	 * @param float $thigh
	 *
	 * @return self
	 */
	public function setThigh($thigh)
	{
		$this->thigh = $thigh;
		return $this;
	}

	/**
	 * Get the Waist from FitBit
	 *
	 * @return float
	 */
	public function getWaist()
	{
		return $this->weight;
	}

	/**
	 * Set the Waist from FitBit
	 *
	 * @param float $waist
	 *
	 * @return self
	 */
	public function setWaist($waist)
	{
		$this->waist = $waist;
		return $this;
	}

	/**
	 * Get the weight
	 *
	 * @return float
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * Set the weight
	 *
	 * @param float $weight
	 *
	 * @return self
	 */
	public function setWeight($weight)
	{
		$this->weight = $weight;
		return $this;
	}

	/**
	 * Get the Date for this weight
	 *
	 * @return \DateTime
	 */
	public function getRecordDate()
	{
		return $this->recordDate;
	}

	/**
	 * Set the Date for this weight
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