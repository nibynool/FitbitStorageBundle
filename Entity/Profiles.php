<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_profiles",
 *     indexes={
 *         @ORM\Index(name="user_id_idx", columns={"user_id"}),
 *         @ORM\Index(name="distance_unit_id_idx", columns={"distance_unit_id"}),
 *         @ORM\Index(name="foods_locale_idx", columns={"foods_locale_id"}),
 *         @ORM\Index(name="locale_idx", columns={"locale_id"}),
 *         @ORM\Index(name="glucose_unit_id_idx", columns={"glucose_unit_id"}),
 *         @ORM\Index(name="height_unit_idx", columns={"height_unit_id"}),
 *         @ORM\Index(name="water_unit_idx", columns={"water_unit_id"}),
 *         @ORM\Index(name="weight_unit_idx", columns={"weight_unit_id"})
 *     },
 *     uniqueConstraints={@ORM\UniqueConstraint(name="encoded_id_idx", columns={"encoded_id"})}
 * )
 */
class Profiles
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $about_me;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar150;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $display_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $encoded_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $full_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nickname;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $member_since;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $offset_from_utc_millis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $stride_length_running;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $stride_length_walking;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $timezone;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Friends", mappedBy="FriendProfile")
     */
    private $Friends;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FriendRequests", mappedBy="FriendProfile")
     */
    private $FriendRequests;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Profile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\DistanceUnits")
     * @ORM\JoinColumn(name="distance_unit_id", referencedColumnName="id", onDelete="restrict")
     */
    private $DistanceUnit;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Locales")
     * @ORM\JoinColumn(name="foods_locale_id", referencedColumnName="id", onDelete="restrict")
     */
    private $FoodLocale;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Locales")
     * @ORM\JoinColumn(name="locale_id", referencedColumnName="id", onDelete="restrict")
     */
    private $Locale;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\GlucoseUnits")
     * @ORM\JoinColumn(name="glucose_unit_id", referencedColumnName="id", onDelete="restrict")
     */
    private $GlucoseUnits;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\HeightUnits")
     * @ORM\JoinColumn(name="height_unit_id", referencedColumnName="id", onDelete="restrict")
     */
    private $HeightUnit;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\WaterUnits")
     * @ORM\JoinColumn(name="water_unit_id", referencedColumnName="id", onDelete="restrict")
     */
    private $WaterUnits;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\WeightUnits")
     * @ORM\JoinColumn(name="weight_unit_id", referencedColumnName="id", onDelete="restrict")
     */
    private $WeightUnit;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Friends = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FriendRequests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set about_me
     *
     * @param string $aboutMe
     * @return Profiles
     */
    public function setAboutMe($aboutMe)
    {
        $this->about_me = $aboutMe;

        return $this;
    }

    /**
     * Get about_me
     *
     * @return string 
     */
    public function getAboutMe()
    {
        return $this->about_me;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Profiles
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set avatar150
     *
     * @param string $avatar150
     * @return Profiles
     */
    public function setAvatar150($avatar150)
    {
        $this->avatar150 = $avatar150;

        return $this;
    }

    /**
     * Get avatar150
     *
     * @return string 
     */
    public function getAvatar150()
    {
        return $this->avatar150;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Profiles
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Profiles
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set date_of_birth
     *
     * @param \DateTime $dateOfBirth
     * @return Profiles
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->date_of_birth = $dateOfBirth;

        return $this;
    }

    /**
     * Get date_of_birth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set display_name
     *
     * @param string $displayName
     * @return Profiles
     */
    public function setDisplayName($displayName)
    {
        $this->display_name = $displayName;

        return $this;
    }

    /**
     * Get display_name
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Set encoded_id
     *
     * @param string $encodedId
     * @return Profiles
     */
    public function setEncodedId($encodedId)
    {
        $this->encoded_id = $encodedId;

        return $this;
    }

    /**
     * Get encoded_id
     *
     * @return string 
     */
    public function getEncodedId()
    {
        return $this->encoded_id;
    }

    /**
     * Set full_name
     *
     * @param string $fullName
     * @return Profiles
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;

        return $this;
    }

    /**
     * Get full_name
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Profiles
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return Profiles
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return Profiles
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set member_since
     *
     * @param \DateTime $memberSince
     * @return Profiles
     */
    public function setMemberSince($memberSince)
    {
        $this->member_since = $memberSince;

        return $this;
    }

    /**
     * Get member_since
     *
     * @return \DateTime 
     */
    public function getMemberSince()
    {
        return $this->member_since;
    }

    /**
     * Set offset_from_utc_millis
     *
     * @param integer $offsetFromUtcMillis
     * @return Profiles
     */
    public function setOffsetFromUtcMillis($offsetFromUtcMillis)
    {
        $this->offset_from_utc_millis = $offsetFromUtcMillis;

        return $this;
    }

    /**
     * Get offset_from_utc_millis
     *
     * @return integer 
     */
    public function getOffsetFromUtcMillis()
    {
        return $this->offset_from_utc_millis;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Profiles
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set stride_length_running
     *
     * @param string $strideLengthRunning
     * @return Profiles
     */
    public function setStrideLengthRunning($strideLengthRunning)
    {
        $this->stride_length_running = $strideLengthRunning;

        return $this;
    }

    /**
     * Get stride_length_running
     *
     * @return string 
     */
    public function getStrideLengthRunning()
    {
        return $this->stride_length_running;
    }

    /**
     * Set stride_length_walking
     *
     * @param string $strideLengthWalking
     * @return Profiles
     */
    public function setStrideLengthWalking($strideLengthWalking)
    {
        $this->stride_length_walking = $strideLengthWalking;

        return $this;
    }

    /**
     * Get stride_length_walking
     *
     * @return string 
     */
    public function getStrideLengthWalking()
    {
        return $this->stride_length_walking;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return Profiles
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Add Friends
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Friends $friends
     * @return Profiles
     */
    public function addFriend(\Nibynool\FitbitStorageBundle\Entity\Friends $friends)
    {
        $this->Friends[] = $friends;

        return $this;
    }

    /**
     * Remove Friends
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Friends $friends
     */
    public function removeFriend(\Nibynool\FitbitStorageBundle\Entity\Friends $friends)
    {
        $this->Friends->removeElement($friends);
    }

    /**
     * Get Friends
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFriends()
    {
        return $this->Friends;
    }

    /**
     * Add FriendRequests
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendRequests $friendRequests
     * @return Profiles
     */
    public function addFriendRequest(\Nibynool\FitbitStorageBundle\Entity\FriendRequests $friendRequests)
    {
        $this->FriendRequests[] = $friendRequests;

        return $this;
    }

    /**
     * Remove FriendRequests
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendRequests $friendRequests
     */
    public function removeFriendRequest(\Nibynool\FitbitStorageBundle\Entity\FriendRequests $friendRequests)
    {
        $this->FriendRequests->removeElement($friendRequests);
    }

    /**
     * Get FriendRequests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFriendRequests()
    {
        return $this->FriendRequests;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Profiles
     */
    public function setUser(\Nibynool\FitbitStorageBundle\Entity\Users $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set DistanceUnit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\DistanceUnits $distanceUnit
     * @return Profiles
     */
    public function setDistanceUnit(\Nibynool\FitbitStorageBundle\Entity\DistanceUnits $distanceUnit = null)
    {
        $this->DistanceUnit = $distanceUnit;

        return $this;
    }

    /**
     * Get DistanceUnit
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\DistanceUnits 
     */
    public function getDistanceUnit()
    {
        return $this->DistanceUnit;
    }

    /**
     * Set FoodLocale
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Locales $foodLocale
     * @return Profiles
     */
    public function setFoodLocale(\Nibynool\FitbitStorageBundle\Entity\Locales $foodLocale = null)
    {
        $this->FoodLocale = $foodLocale;

        return $this;
    }

    /**
     * Get FoodLocale
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Locales 
     */
    public function getFoodLocale()
    {
        return $this->FoodLocale;
    }

    /**
     * Set Locale
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Locales $locale
     * @return Profiles
     */
    public function setLocale(\Nibynool\FitbitStorageBundle\Entity\Locales $locale = null)
    {
        $this->Locale = $locale;

        return $this;
    }

    /**
     * Get Locale
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Locales 
     */
    public function getLocale()
    {
        return $this->Locale;
    }

    /**
     * Set GlucoseUnits
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\GlucoseUnits $glucoseUnits
     * @return Profiles
     */
    public function setGlucoseUnits(\Nibynool\FitbitStorageBundle\Entity\GlucoseUnits $glucoseUnits = null)
    {
        $this->GlucoseUnits = $glucoseUnits;

        return $this;
    }

    /**
     * Get GlucoseUnits
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\GlucoseUnits 
     */
    public function getGlucoseUnits()
    {
        return $this->GlucoseUnits;
    }

    /**
     * Set HeightUnit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\HeightUnits $heightUnit
     * @return Profiles
     */
    public function setHeightUnit(\Nibynool\FitbitStorageBundle\Entity\HeightUnits $heightUnit = null)
    {
        $this->HeightUnit = $heightUnit;

        return $this;
    }

    /**
     * Get HeightUnit
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\HeightUnits 
     */
    public function getHeightUnit()
    {
        return $this->HeightUnit;
    }

    /**
     * Set WaterUnits
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\WaterUnits $waterUnits
     * @return Profiles
     */
    public function setWaterUnits(\Nibynool\FitbitStorageBundle\Entity\WaterUnits $waterUnits = null)
    {
        $this->WaterUnits = $waterUnits;

        return $this;
    }

    /**
     * Get WaterUnits
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\WaterUnits 
     */
    public function getWaterUnits()
    {
        return $this->WaterUnits;
    }

    /**
     * Set WeightUnit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\WeightUnits $weightUnit
     * @return Profiles
     */
    public function setWeightUnit(\Nibynool\FitbitStorageBundle\Entity\WeightUnits $weightUnit = null)
    {
        $this->WeightUnit = $weightUnit;

        return $this;
    }

    /**
     * Get WeightUnit
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\WeightUnits 
     */
    public function getWeightUnit()
    {
        return $this->WeightUnit;
    }
}
