<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * FitBit Sleep Type Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_sleep_type")
 */
class FitBitSleepType
{
	/**
	 * @var int Numeric ID for this sleep type record
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 */
	protected $id;
	/**
	 * @var string The Name of this Sleep Type
	 * @ORM\Column(type="string", length=32, nullable=true)
	 */
	protected $name;
	/**
	 * @var ArrayCollection An array collection of Minutes for this sleep Type
	 * @ORM\OneToMany(targetEntity="FitBitSleepDetail", mappedBy="FitBitSleepType")
	 */
	protected $FitBitSleepDetail;

	/**
	 * Class constructor
	 */
	public function __construct()
	{
		$this->FitBitSleepDetail = new ArrayCollection();
	}

	/**
	 * Get the ID for this FitBit Sleep Type
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get Sleep Type Name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set Sleep Type Name
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
	 * Add a FitBit Sleep Detail to this sleep type record
	 *
	 * @param FitBitSleepDetail $detail
	 *
	 * @return self
	 */
	public function addFitBitSleepDetail(FitBitSleepDetail $detail)
	{
		$this->FitBitSleepDetail[] = $detail;
		return $this;
	}

	/**
	 * Remove a FitBit Sleep Detail from this sleep type record
	 *
	 * @param FitBitSleepDetail $detail
	 *
	 * @return self
	 */
	public function removeFitBitSleepDetail(FitBitSleepDetail $detail)
	{
		$this->FitBitSleepDetail->removeElement($detail);
		return $this;
	}

	/**
	 * Get the FitBit Sleep Details from this sleep type record
	 *
	 * @return ArrayCollection
	 */
	public function getFitBitSleepDetails()
	{
		return $this->FitBitSleepDetail;
	}
}