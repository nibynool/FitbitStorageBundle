<?php

namespace NibyNool\FitBitStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FitBit Storage Bundle Profile Entity Class
 *
 * @package NibyNool\FitBitStorageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="fitbit_profile")
 */
class FitBitProfile
{
	/**
	 * @var int Numeric identifier for this FitBit Profile Record
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @var FitBitUser The FitBit User entity this profile is associated with
	 * @ORM\ManyToOne(targetEntity="FitBitUser", inversedBy="FitBitProfile")
	 * @ORM\JoinColumn(name="fitbitUserId", referencedColumnName="id")
	 */
	protected $FitBitUser;
	/**
	 * @var string The About Me text from FitBit
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $aboutMe;
	/**
	 * @var string The URL for the 100px square avatar for this profile
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $avatar;
	/**
	 * @var string The URL for the 150px square avatar for this profile
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $avatar150;
	/**
	 * @var string The city this FitBit user has set
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $city;
	/**
	 * @var string The countrry this FitBit user has set
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $country;
	/**
	 * @var \DateTime The FitBit profile's Date of Birth record
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $dateOfBirth;
	/**
	 * @var string The FitBit user's display name
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $displayName;
	/**
	 * @var string The distance unit this FitBit user has selected
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $distanceUnit;
	/**
	 * @var string The Encoded ID returned fro FitBit
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $encodedId;
	/**
	 * @var string The Locale used for Food selection
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $foodsLocale;
	/**
	 * @var string The FitBit User's full name
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $fullName;
	/**
	 * @var string The gender recorded by this FitBit user
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $gender;
	/**
	 * @var string The glucose unit used by this FitBit user
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $glucoseUnit;
	/**
	 * @var float The user's height from FitBit
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $height;
	/**
	 * @var string The unit used for the User's height record
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $heightUnit;
	/**
	 * @var string The nickname used by this user on FitBit
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $nickname;
	/**
	 * @var string The locale used by this FitBit user
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $locale;
	/**
	 * @var \DateTime The date this user joined FitBit
	 * @ORM\Column(type="date")
	 */
	protected $memberSince;
	/**
	 * @var int THe number of milliseconds dates and times are offset from UTC for this user
	 * @ORM\Column(type="integer", nullable=true)
	 */
	protected $offsetFromUTCMillis;
	/**
	 * @var string The state this FitBit user lives in
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $state;
	/**
	 * @var float The user's running stride length
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $strideLengthRunning;
	/**
	 * @var float The user's walking stride length
	 * @ORM\Column(type="float", nullable=true)
	 */
	protected $strideLengthWalking;
	/**
	 * @var string The timezone the user is located in
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $timezone;
	/**
	 * @var string The unit used for water consumption measurement
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $waterUnit;
	/**
	 * @var string The unit used for weight measurement
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	protected $weightUnit;
	/**
	 * @var \DateTime The date and time this profile record was created
	 * @ORM\Column(type="datetime")
	 */
	protected $recordTimestamp;

	/**
	 * Get the ID for this FitBit Profile
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the FitBit User entity for this Profile
	 *
	 * @return FitBitUser
	 */
	public function getFitBitUser()
	{
		return $this->FitBitUser;
	}

	/**
	 * Set the FitBit User entity for this Profile
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
	 * Get the About Me text from FitBit
	 *
	 * @return string
	 */
	public function getAboutMe()
	{
		return $this->aboutMe;
	}

	/**
	 * Set the About Me text from FitBit
	 *
	 * @param string $about
	 *
	 * @return self
	 */
	public function setAboutMe($about)
	{
		$this->aboutMe = $about;
		return $this;
	}

	/**
	 * Get the URL for the FitBit 100px avatar
	 *
	 * @return string
	 */
	public function getAvatar()
	{
		return $this->avatar;
	}

	/**
	 * Set the URL for the FitBit 100px avatar
	 *
	 * @param string $url
	 *
	 * @return self
	 */
	public function setAvatar($url)
	{
		$this->avatar = $url;
		return $this;
	}

	/**
	 * Get the URL for the FitBit 150px avatar
	 *
	 * @return string
	 */
	public function getAvatar150()
	{
		return $this->avatar150;
	}

	/**
	 * Set the URL for the FitBit 150px avatar
	 *
	 * @param string $url
	 *
	 * @return self
	 */
	public function setAvatar150($url)
	{
		$this->avatar150 = $url;
		return $this;
	}

	/**
	 * Get the city from the FitBit profile
	 *
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Set the city from the FitBit profile
	 *
	 * @param string $city
	 *
	 * @return self
	 */
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * Get the country from the FitBit Profile
	 *
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Set the country from the FitBit profile
	 *
	 * @param string $country
	 *
	 * @return self
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * Get the Date of Birth from the FitBit profile
	 *
	 * @return \DateTime
	 */
	public function getDateOfBirth()
	{
		return $this->dateOfBirth;
	}

	/**
	 * Set the Date of Birth from the FitBit profile
	 *
	 * @param \DateTime $dob
	 *
	 * @return self
	 */
	public function setDateOfBirth(\DateTime $dob)
	{
		$this->dateOfBirth = $dob;
		return $this;
	}

	/**
	 * Get the Display Name from FitBit
	 *
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * Set the Display name from FitBit
	 *
	 * @param string $name
	 *
	 * @return self
	 */
	public function setDisplayName($name)
	{
		$this->displayName = $name;
		return $this;
	}

	/**
	 * Get the preferred distance unit from FitBit
	 *
	 * @return string
	 */
	public function getDistanceUnit()
	{
		return $this->distanceUnit;
	}

	/**
	 * Set the preferred distance unit from FitBit
	 *
	 * @param string $unit
	 *
	 * @return self
	 */
	public function setDistanceUnit($unit)
	{
		$this->distanceUnit = $unit;
		return $this;
	}

	/**
	 * Get the FitBit Encoded ID
	 *
	 * @return string
	 */
	public function getEncodedId()
	{
		return $this->encodedId;
	}

	/**
	 * Get the FitBit Encoded ID
	 *
	 * @param string $id
	 *
	 * @return self
	 */
	public function setEncodedId($id)
	{
		$this->encodedId = $id;
		return $this;
	}

	/**
	 * Get the FitBit Food Locale
	 *
	 * @return string
	 */
	public function getFoodsLocale()
	{
		return $this->foodsLocale;
	}

	/**
	 * Get the FitBit Foods Locale
	 *
	 * @param string $locale
	 *
	 * @return self
	 */
	public function setFoodsLocale($locale)
	{
		$this->foodsLocale = $locale;
		return $this;
	}

	/**
	 * Get the full name from FitBit
	 *
	 * @return string
	 */
	public function getFullName()
	{
		return $this->fullName;
	}

	/**
	 * Set the Full name from FitBit
	 *
	 * @param string $name
	 *
	 * @return self
	 */
	public function setFullName($name)
	{
		$this->fullName = $name;
		return $this;
	}

	/**
	 * Get the Gender from FitBit
	 *
	 * @return string
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Set the gender from FitBit
	 *
	 * @param string $gender
	 *
	 * @return self
	 */
	public function setGender($gender)
	{
		$this->gender = $gender;
		return $this;
	}

	/**
	 * Get the glucose unit from FitBit
	 *
	 * @return string
	 */
	public function getGlucoseUnit()
	{
		return $this->glucoseUnit;
	}

	/**
	 * Set the glucose unit from FitBit
	 *
	 * @param string $unit
	 *
	 * @return self
	 */
	public function setGlucoseUnit($unit)
	{
		$this->glucoseUnit = $unit;
		return $this;
	}

	/**
	 * Get the user's height from FitBit
	 *
	 * @return float
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * Set the user's height from FitBit
	 *
	 * @param float $height
	 *
	 * @return self
	 */
	public function setHeight($height)
	{
		$this->height = $height;
		return $this;
	}

	/**
	 * Get the height unit from FitBit
	 *
	 * @return string
	 */
	public function getHeightUnit()
	{
		return $this->heightUnit;
	}

	/**
	 * Set the height unit from FitBit
	 *
	 * @param string $unit
	 *
	 * @return self
	 */
	public function setHeightUnit($unit)
	{
		$this->heightUnit = $unit;
		return $this;
	}

	/**
	 * Get the FitBit Nickname
	 *
	 * @return string
	 */
	public function getNickname()
	{
		return $this->nickname;
	}

	/**
	 * Set the FitBit nickname
	 *
	 * @param string $nick
	 *
	 * @return self
	 */
	public function setNickname($nick)
	{
		$this->nickname = $nick;
		return $this;
	}

	/**
	 * Get the FitBit Locale
	 *
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * Set the FitBit locale
	 *
	 * @param string $locale
	 *
	 * @return self
	 */
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}

	/**
	 * Get the FitBit Join Date
	 *
	 * @return \DateTime
	 */
	public function getMemberSince()
	{
		return $this->memberSince;
	}

	/**
	 * Set the FitBit Join Date
	 *
	 * @param \DateTime $date
	 *
	 * @return self
	 */
	public function setMemberSince(\DateTime $date)
	{
		$this->memberSince = $date;
		return $this;
	}

	/**
	 * Get the UTC Offset in Milliseconds
	 *
	 * @return int
	 */
	public function getOffsetFromUTCMillis()
	{
		return $this->offsetFromUTCMillis;
	}

	/**
	 * Set the UTC Offset in Milliseconds
	 *
	 * @param int $offset
	 *
	 * @return self
	 */
	public function setOffsetFromUTCMillis($offset)
	{
		$this->offsetFromUTCMillis = $offset;
		return $this;
	}

	/**
	 * Get the state from FitBit
	 *
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Set the state from FitBit
	 *
	 * @param string $state
	 *
	 * @return self
	 */
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

	/**
	 * Get the running stride length from FitBit
	 *
	 * @return float
	 */
	public function getStrideLengthRunning()
	{
		return $this->strideLengthRunning;
	}

	/**
	 * Set the running stride length from FitBit
	 *
	 * @param float $stride
	 *
	 * @return self
	 */
	public function setStrideLengthRunning($stride)
	{
		$this->strideLengthRunning = $stride;
		return $this;
	}

	/**
	 * Get the walking stride length from FitBit
	 *
	 * @return float
	 */
	public function getStrideLengthWalking()
	{
		return $this->strideLengthWalking;
	}

	/**
	 * Set the walking stride length from FitBit
	 *
	 * @param float $stride
	 *
	 * @return self
	 */
	public function setStrideLengthWalking($stride)
	{
		$this->strideLengthWalking = $stride;
		return $this;
	}

	/**
	 * Get the FitBit Timezone
	 *
	 * @return string
	 */
	public function getTimezone()
	{
		return $this->timezone;
	}

	/**
	 * Set the FitBit timezone
	 *
	 * @param string $tz
	 *
	 * @return self
	 */
	public function setTimezone($tz)
	{
		$this->timezone = $tz;
		return $this;
	}

	/**
	 * Get the water units from FitBit
	 *
	 * @return string
	 */
	public function getWaterUnit()
	{
		return $this->waterUnit;
	}

	/**
	 * Set the water units from FitBit
	 *
	 * @param string $unit
	 *
	 * @return self
	 */
	public function setWaterUnit($unit)
	{
		$this->waterUnit = $unit;
		return $this;
	}

	/**
	 * Get the weight unit from FitBit
	 *
	 * @return string
	 */
	public function getWeightUnit()
	{
		return $this->weightUnit;
	}

	/**
	 * Set the weight unit from FitBit
	 *
	 * @param string $unit
	 *
	 * @return $this
	 */
	public function setWeightUnit($unit)
	{
		$this->weightUnit = $unit;
		return $this;
	}

	/**
	 * Get the date/time this record was created
	 *
	 * @return \DateTime
	 */
	public function getRecordTimestamp()
	{
		return $this->recordTimestamp;
	}

	/**
	 * Set the creation date/time for this record
	 *
	 * @param \DateTime $datetime
	 *
	 * @return $this
	 */
	public function setRecordTimestamp(\DateTime $datetime)
	{
		$this->recordTimestamp = $datetime;
		return $this;
	}
}