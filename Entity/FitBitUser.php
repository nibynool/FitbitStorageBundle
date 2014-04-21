<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Storage Bundle User Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_users")
 */
class FitBitUser
{
	/**
	 * @var int The numeric ID for this FitBit Storage User Entity
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @var string The OAuth Token used to identify this user to FitBit
	 * @ORM\Column(type="text", length=255)
	 */
	protected $oauthToken;
	/**
	 * @var string The OAuth Secret used to identify this user to FitBit
	 * @ORM\Column(type="text", length=255)
	 */
	protected $oauthSecret;
	/**
	 * @var ArrayCollection An array collection of FitBit Profiles for this user
	 * @ORM\OneToMany(targetEntity="FitBitProfile", mappedBy="FitBitUser")
	 */
	protected $FitBitProfile;
	/**
	 * @var ArrayCollection An array collection of FitBit Body Records for this user
	 * @ORM\OneToMany(targetEntity="FitBitBody", mappedBy="FitBitUser")
	 */
	protected $FitBitBody;

	/**
	 * Class constructor
	 */
	public function __construct()
	{
		$this->FitBitProfile               = new ArrayCollection();
		$this->FitBitBody                  = new ArrayCollection();
	}

	/**
	 * Get the ID for this FitBit User
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the OAuth Token for this FitBit User
	 *
	 * @return string
	 */
	public function getOAuthToken()
	{
		return $this->oauthToken;
	}

	/**
	 * Set the OAuth Token for this FitBit User
	 *
	 * @param string $token
	 *
	 * @return self
	 */
	public function setOAuthToken($token)
	{
		$this->oauthToken = $token;

		return $this;
	}

	/**
	 * Get the OAuth Secret for this FitBit User
	 *
	 * @return string
	 */
	public function getOAuthSecret()
	{
		return $this->oauthSecret;
	}

	/**
	 * Set the OAuth Secret for this FitBit User
	 *
	 * @param string $secret
	 *
	 * @return self
	 */
	public function setOAuthSecret($secret)
	{
		$this->oauthSecret = $secret;

		return $this;
	}

	/**
	 * Add a FitBit Profile to this FitBit User
	 *
	 * @param FitBitProfile $profile
	 *
	 * @return self
	 */
	public function addFitBitProfile(FitBitProfile $profile)
	{
		$this->FitBitProfile[] = $profile;
		return $this;
	}

	/**
	 * Remove a FitBit Profile from this FitBit User
	 *
	 * @param FitBitProfile $profile
	 *
	 * @return self
	 */
	public function removeFitBitProfile(FitBitProfile $profile)
	{
		$this->FitBitProfile->removeElement($profile);
		return $this;
	}

	/**
	 * Get the FitBit Profiles from this FitBit User
	 *
	 * @return ArrayCollection
	 */
	public function getFitBitProfiles()
	{
		return $this->FitBitProfile;
	}

	/**
	 * Add a FitBit Body entry for this FitBit User
	 *
	 * @param FitBitBody $body
	 *
	 * @return self
	 */
	public function addFitBitBody(FitBitBody $body)
	{
		$this->FitBitBody[] = $body;
		return $this;
	}

	/**
	 * Remove a FitBit Body entry from this FitBit User
	 *
	 * @param FitBitBody $body
	 *
	 * @return self
	 */
	public function removeFitBitBody(FitBitBody $body)
	{
		$this->FitBitBody->removeElement($body);
		return $this;
	}

	/**
	 * Get the FitBit Bodie Entries from this FitBit User
	 *
	 * @return ArrayCollection
	 */
	public function getFitBitBodies()
	{
		return $this->FitBitBody;
	}
}