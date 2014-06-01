<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_users")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $oauth_token;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $oauth_secret;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivitySummaries", mappedBy="User")
     */
    private $ActivitySummaries;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Bodies", mappedBy="User")
     */
    private $Bodies;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Profiles", mappedBy="User")
     */
    private $Profile;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\RequestLogs", mappedBy="User")
     */
    private $Requests;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Sleep", mappedBy="User")
     */
    private $Sleeps;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\SleepSummaries", mappedBy="User")
     */
    private $SleepSummaries;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates", mappedBy="User")
     */
    private $SubscriptionUpdates;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\UpdateBacklog", mappedBy="User")
     */
    private $Backlog;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Activities", mappedBy="User")
     */
    private $Activities;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FavoriteActivities", mappedBy="User")
     */
    private $FavoriteActivities;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics", mappedBy="User")
     */
    private $BestStatistics;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Goals", mappedBy="User")
     */
    private $Goals;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics", mappedBy="User")
     */
    private $LifetimeStatistics;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\BloodPressures", mappedBy="User")
     */
    private $BloodPressures;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\BloodPressureAverages", mappedBy="User")
     */
    private $BloodPressureAverages;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Glucose", mappedBy="User")
     */
    private $Glucose;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\HBA1C", mappedBy="User")
     */
    private $HBA1Cs;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\HeartRates", mappedBy="User")
     */
    private $HeartRates;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\AverageHeartRates", mappedBy="User")
     */
    private $AverageHeartRates;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", mappedBy="User")
     */
    private $CustomFoods;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Meals", mappedBy="User")
     */
    private $Meals;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FavoriteFoods", mappedBy="User")
     */
    private $FavoriteFoods;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsConsumed", mappedBy="User")
     */
    private $FoodsConsumed;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodSummaries", mappedBy="User")
     */
    private $FoodSummary;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Devices", mappedBy="User")
     */
    private $Devices;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Friends", mappedBy="User")
     */
    private $Friends;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Subscriptions", mappedBy="User")
     */
    private $Subscriptions;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FriendRequests", mappedBy="User")
     */
    private $FriendRequests;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Badges", mappedBy="User")
     */
    private $Badges;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\WaterSummary", mappedBy="User")
     */
    private $WaterSummary;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Water", mappedBy="User")
     */
    private $Water;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ActivitySummaries = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Bodies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Profile = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Requests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Sleeps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SleepSummaries = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SubscriptionUpdates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Backlog = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Activities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FavoriteActivities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->BestStatistics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Goals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->LifetimeStatistics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->BloodPressures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->BloodPressureAverages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Glucose = new \Doctrine\Common\Collections\ArrayCollection();
        $this->HBA1Cs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->HeartRates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AverageHeartRates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->CustomFoods = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Meals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FavoriteFoods = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FoodsConsumed = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FoodSummary = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Devices = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Friends = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Subscriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FriendRequests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Badges = new \Doctrine\Common\Collections\ArrayCollection();
        $this->WaterSummary = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Water = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set oauth_token
     *
     * @param string $oauthToken
     * @return Users
     */
    public function setOauthToken($oauthToken)
    {
        $this->oauth_token = $oauthToken;

        return $this;
    }

    /**
     * Get oauth_token
     *
     * @return string 
     */
    public function getOauthToken()
    {
        return $this->oauth_token;
    }

    /**
     * Set oauth_secret
     *
     * @param string $oauthSecret
     * @return Users
     */
    public function setOauthSecret($oauthSecret)
    {
        $this->oauth_secret = $oauthSecret;

        return $this;
    }

    /**
     * Get oauth_secret
     *
     * @return string 
     */
    public function getOauthSecret()
    {
        return $this->oauth_secret;
    }

    /**
     * Add ActivitySummaries
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaries $activitySummaries
     * @return Users
     */
    public function addActivitySummary(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaries $activitySummaries)
    {
        $this->ActivitySummaries[] = $activitySummaries;

        return $this;
    }

    /**
     * Remove ActivitySummaries
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaries $activitySummaries
     */
    public function removeActivitySummary(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaries $activitySummaries)
    {
        $this->ActivitySummaries->removeElement($activitySummaries);
    }

    /**
     * Get ActivitySummaries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivitySummaries()
    {
        return $this->ActivitySummaries;
    }

    /**
     * Add Bodies
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Bodies $bodies
     * @return Users
     */
    public function addBody(\Nibynool\FitbitStorageBundle\Entity\Bodies $bodies)
    {
        $this->Bodies[] = $bodies;

        return $this;
    }

    /**
     * Remove Bodies
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Bodies $bodies
     */
    public function removeBody(\Nibynool\FitbitStorageBundle\Entity\Bodies $bodies)
    {
        $this->Bodies->removeElement($bodies);
    }

    /**
     * Get Bodies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBodies()
    {
        return $this->Bodies;
    }

    /**
     * Add Profile
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Profiles $profile
     * @return Users
     */
    public function addProfile(\Nibynool\FitbitStorageBundle\Entity\Profiles $profile)
    {
        $this->Profile[] = $profile;

        return $this;
    }

    /**
     * Remove Profile
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Profiles $profile
     */
    public function removeProfile(\Nibynool\FitbitStorageBundle\Entity\Profiles $profile)
    {
        $this->Profile->removeElement($profile);
    }

    /**
     * Get Profile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * Add Requests
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\RequestLogs $requests
     * @return Users
     */
    public function addRequest(\Nibynool\FitbitStorageBundle\Entity\RequestLogs $requests)
    {
        $this->Requests[] = $requests;

        return $this;
    }

    /**
     * Remove Requests
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\RequestLogs $requests
     */
    public function removeRequest(\Nibynool\FitbitStorageBundle\Entity\RequestLogs $requests)
    {
        $this->Requests->removeElement($requests);
    }

    /**
     * Get Requests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRequests()
    {
        return $this->Requests;
    }

    /**
     * Add Sleeps
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Sleep $sleeps
     * @return Users
     */
    public function addSleep(\Nibynool\FitbitStorageBundle\Entity\Sleep $sleeps)
    {
        $this->Sleeps[] = $sleeps;

        return $this;
    }

    /**
     * Remove Sleeps
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Sleep $sleeps
     */
    public function removeSleep(\Nibynool\FitbitStorageBundle\Entity\Sleep $sleeps)
    {
        $this->Sleeps->removeElement($sleeps);
    }

    /**
     * Get Sleeps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSleeps()
    {
        return $this->Sleeps;
    }

    /**
     * Add SleepSummaries
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SleepSummaries $sleepSummaries
     * @return Users
     */
    public function addSleepSummary(\Nibynool\FitbitStorageBundle\Entity\SleepSummaries $sleepSummaries)
    {
        $this->SleepSummaries[] = $sleepSummaries;

        return $this;
    }

    /**
     * Remove SleepSummaries
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SleepSummaries $sleepSummaries
     */
    public function removeSleepSummary(\Nibynool\FitbitStorageBundle\Entity\SleepSummaries $sleepSummaries)
    {
        $this->SleepSummaries->removeElement($sleepSummaries);
    }

    /**
     * Get SleepSummaries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSleepSummaries()
    {
        return $this->SleepSummaries;
    }

    /**
     * Add SubscriptionUpdates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates
     * @return Users
     */
    public function addSubscriptionUpdate(\Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates)
    {
        $this->SubscriptionUpdates[] = $subscriptionUpdates;

        return $this;
    }

    /**
     * Remove SubscriptionUpdates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates
     */
    public function removeSubscriptionUpdate(\Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates)
    {
        $this->SubscriptionUpdates->removeElement($subscriptionUpdates);
    }

    /**
     * Get SubscriptionUpdates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptionUpdates()
    {
        return $this->SubscriptionUpdates;
    }

    /**
     * Add Backlog
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\UpdateBacklog $backlog
     * @return Users
     */
    public function addBacklog(\Nibynool\FitbitStorageBundle\Entity\UpdateBacklog $backlog)
    {
        $this->Backlog[] = $backlog;

        return $this;
    }

    /**
     * Remove Backlog
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\UpdateBacklog $backlog
     */
    public function removeBacklog(\Nibynool\FitbitStorageBundle\Entity\UpdateBacklog $backlog)
    {
        $this->Backlog->removeElement($backlog);
    }

    /**
     * Get Backlog
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBacklog()
    {
        return $this->Backlog;
    }

    /**
     * Add Activities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $activities
     * @return Users
     */
    public function addActivity(\Nibynool\FitbitStorageBundle\Entity\Activities $activities)
    {
        $this->Activities[] = $activities;

        return $this;
    }

    /**
     * Remove Activities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $activities
     */
    public function removeActivity(\Nibynool\FitbitStorageBundle\Entity\Activities $activities)
    {
        $this->Activities->removeElement($activities);
    }

    /**
     * Get Activities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivities()
    {
        return $this->Activities;
    }

    /**
     * Add FavoriteActivities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $favoriteActivities
     * @return Users
     */
    public function addFavoriteActivity(\Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $favoriteActivities)
    {
        $this->FavoriteActivities[] = $favoriteActivities;

        return $this;
    }

    /**
     * Remove FavoriteActivities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $favoriteActivities
     */
    public function removeFavoriteActivity(\Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $favoriteActivities)
    {
        $this->FavoriteActivities->removeElement($favoriteActivities);
    }

    /**
     * Get FavoriteActivities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavoriteActivities()
    {
        return $this->FavoriteActivities;
    }

    /**
     * Add BestStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics
     * @return Users
     */
    public function addBestStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics)
    {
        $this->BestStatistics[] = $bestStatistics;

        return $this;
    }

    /**
     * Remove BestStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics
     */
    public function removeBestStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics)
    {
        $this->BestStatistics->removeElement($bestStatistics);
    }

    /**
     * Get BestStatistics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBestStatistics()
    {
        return $this->BestStatistics;
    }

    /**
     * Add Goals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Goals $goals
     * @return Users
     */
    public function addGoal(\Nibynool\FitbitStorageBundle\Entity\Goals $goals)
    {
        $this->Goals[] = $goals;

        return $this;
    }

    /**
     * Remove Goals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Goals $goals
     */
    public function removeGoal(\Nibynool\FitbitStorageBundle\Entity\Goals $goals)
    {
        $this->Goals->removeElement($goals);
    }

    /**
     * Get Goals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoals()
    {
        return $this->Goals;
    }

    /**
     * Add LifetimeStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics
     * @return Users
     */
    public function addLifetimeStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics)
    {
        $this->LifetimeStatistics[] = $lifetimeStatistics;

        return $this;
    }

    /**
     * Remove LifetimeStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics
     */
    public function removeLifetimeStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics)
    {
        $this->LifetimeStatistics->removeElement($lifetimeStatistics);
    }

    /**
     * Get LifetimeStatistics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLifetimeStatistics()
    {
        return $this->LifetimeStatistics;
    }

    /**
     * Add BloodPressures
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BloodPressures $bloodPressures
     * @return Users
     */
    public function addBloodPressure(\Nibynool\FitbitStorageBundle\Entity\BloodPressures $bloodPressures)
    {
        $this->BloodPressures[] = $bloodPressures;

        return $this;
    }

    /**
     * Remove BloodPressures
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BloodPressures $bloodPressures
     */
    public function removeBloodPressure(\Nibynool\FitbitStorageBundle\Entity\BloodPressures $bloodPressures)
    {
        $this->BloodPressures->removeElement($bloodPressures);
    }

    /**
     * Get BloodPressures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBloodPressures()
    {
        return $this->BloodPressures;
    }

    /**
     * Add BloodPressureAverages
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BloodPressureAverages $bloodPressureAverages
     * @return Users
     */
    public function addBloodPressureAverage(\Nibynool\FitbitStorageBundle\Entity\BloodPressureAverages $bloodPressureAverages)
    {
        $this->BloodPressureAverages[] = $bloodPressureAverages;

        return $this;
    }

    /**
     * Remove BloodPressureAverages
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BloodPressureAverages $bloodPressureAverages
     */
    public function removeBloodPressureAverage(\Nibynool\FitbitStorageBundle\Entity\BloodPressureAverages $bloodPressureAverages)
    {
        $this->BloodPressureAverages->removeElement($bloodPressureAverages);
    }

    /**
     * Get BloodPressureAverages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBloodPressureAverages()
    {
        return $this->BloodPressureAverages;
    }

    /**
     * Add Glucose
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Glucose $glucose
     * @return Users
     */
    public function addGlucose(\Nibynool\FitbitStorageBundle\Entity\Glucose $glucose)
    {
        $this->Glucose[] = $glucose;

        return $this;
    }

    /**
     * Remove Glucose
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Glucose $glucose
     */
    public function removeGlucose(\Nibynool\FitbitStorageBundle\Entity\Glucose $glucose)
    {
        $this->Glucose->removeElement($glucose);
    }

    /**
     * Get Glucose
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGlucose()
    {
        return $this->Glucose;
    }

    /**
     * Add HBA1Cs
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\HBA1C $hBA1Cs
     * @return Users
     */
    public function addHBA1C(\Nibynool\FitbitStorageBundle\Entity\HBA1C $hBA1Cs)
    {
        $this->HBA1Cs[] = $hBA1Cs;

        return $this;
    }

    /**
     * Remove HBA1Cs
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\HBA1C $hBA1Cs
     */
    public function removeHBA1C(\Nibynool\FitbitStorageBundle\Entity\HBA1C $hBA1Cs)
    {
        $this->HBA1Cs->removeElement($hBA1Cs);
    }

    /**
     * Get HBA1Cs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHBA1Cs()
    {
        return $this->HBA1Cs;
    }

    /**
     * Add HeartRates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\HeartRates $heartRates
     * @return Users
     */
    public function addHeartRate(\Nibynool\FitbitStorageBundle\Entity\HeartRates $heartRates)
    {
        $this->HeartRates[] = $heartRates;

        return $this;
    }

    /**
     * Remove HeartRates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\HeartRates $heartRates
     */
    public function removeHeartRate(\Nibynool\FitbitStorageBundle\Entity\HeartRates $heartRates)
    {
        $this->HeartRates->removeElement($heartRates);
    }

    /**
     * Get HeartRates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHeartRates()
    {
        return $this->HeartRates;
    }

    /**
     * Add AverageHeartRates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AverageHeartRates $averageHeartRates
     * @return Users
     */
    public function addAverageHeartRate(\Nibynool\FitbitStorageBundle\Entity\AverageHeartRates $averageHeartRates)
    {
        $this->AverageHeartRates[] = $averageHeartRates;

        return $this;
    }

    /**
     * Remove AverageHeartRates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AverageHeartRates $averageHeartRates
     */
    public function removeAverageHeartRate(\Nibynool\FitbitStorageBundle\Entity\AverageHeartRates $averageHeartRates)
    {
        $this->AverageHeartRates->removeElement($averageHeartRates);
    }

    /**
     * Get AverageHeartRates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAverageHeartRates()
    {
        return $this->AverageHeartRates;
    }

    /**
     * Add CustomFoods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $customFoods
     * @return Users
     */
    public function addCustomFood(\Nibynool\FitbitStorageBundle\Entity\Foods $customFoods)
    {
        $this->CustomFoods[] = $customFoods;

        return $this;
    }

    /**
     * Remove CustomFoods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $customFoods
     */
    public function removeCustomFood(\Nibynool\FitbitStorageBundle\Entity\Foods $customFoods)
    {
        $this->CustomFoods->removeElement($customFoods);
    }

    /**
     * Get CustomFoods
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomFoods()
    {
        return $this->CustomFoods;
    }

    /**
     * Add Meals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Meals $meals
     * @return Users
     */
    public function addMeal(\Nibynool\FitbitStorageBundle\Entity\Meals $meals)
    {
        $this->Meals[] = $meals;

        return $this;
    }

    /**
     * Remove Meals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Meals $meals
     */
    public function removeMeal(\Nibynool\FitbitStorageBundle\Entity\Meals $meals)
    {
        $this->Meals->removeElement($meals);
    }

    /**
     * Get Meals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeals()
    {
        return $this->Meals;
    }

    /**
     * Add FavoriteFoods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favoriteFoods
     * @return Users
     */
    public function addFavoriteFood(\Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favoriteFoods)
    {
        $this->FavoriteFoods[] = $favoriteFoods;

        return $this;
    }

    /**
     * Remove FavoriteFoods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favoriteFoods
     */
    public function removeFavoriteFood(\Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favoriteFoods)
    {
        $this->FavoriteFoods->removeElement($favoriteFoods);
    }

    /**
     * Get FavoriteFoods
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavoriteFoods()
    {
        return $this->FavoriteFoods;
    }

    /**
     * Add FoodsConsumed
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $foodsConsumed
     * @return Users
     */
    public function addFoodsConsumed(\Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $foodsConsumed)
    {
        $this->FoodsConsumed[] = $foodsConsumed;

        return $this;
    }

    /**
     * Remove FoodsConsumed
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $foodsConsumed
     */
    public function removeFoodsConsumed(\Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $foodsConsumed)
    {
        $this->FoodsConsumed->removeElement($foodsConsumed);
    }

    /**
     * Get FoodsConsumed
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFoodsConsumed()
    {
        return $this->FoodsConsumed;
    }

    /**
     * Add FoodSummary
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodSummaries $foodSummary
     * @return Users
     */
    public function addFoodSummary(\Nibynool\FitbitStorageBundle\Entity\FoodSummaries $foodSummary)
    {
        $this->FoodSummary[] = $foodSummary;

        return $this;
    }

    /**
     * Remove FoodSummary
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodSummaries $foodSummary
     */
    public function removeFoodSummary(\Nibynool\FitbitStorageBundle\Entity\FoodSummaries $foodSummary)
    {
        $this->FoodSummary->removeElement($foodSummary);
    }

    /**
     * Get FoodSummary
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFoodSummary()
    {
        return $this->FoodSummary;
    }

    /**
     * Add Devices
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Devices $devices
     * @return Users
     */
    public function addDevice(\Nibynool\FitbitStorageBundle\Entity\Devices $devices)
    {
        $this->Devices[] = $devices;

        return $this;
    }

    /**
     * Remove Devices
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Devices $devices
     */
    public function removeDevice(\Nibynool\FitbitStorageBundle\Entity\Devices $devices)
    {
        $this->Devices->removeElement($devices);
    }

    /**
     * Get Devices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevices()
    {
        return $this->Devices;
    }

    /**
     * Add Friends
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Friends $friends
     * @return Users
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
     * Add Subscriptions
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions
     * @return Users
     */
    public function addSubscription(\Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions)
    {
        $this->Subscriptions[] = $subscriptions;

        return $this;
    }

    /**
     * Remove Subscriptions
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions
     */
    public function removeSubscription(\Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions)
    {
        $this->Subscriptions->removeElement($subscriptions);
    }

    /**
     * Get Subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptions()
    {
        return $this->Subscriptions;
    }

    /**
     * Add FriendRequests
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendRequests $friendRequests
     * @return Users
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
     * Add Badges
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Badges $badges
     * @return Users
     */
    public function addBadge(\Nibynool\FitbitStorageBundle\Entity\Badges $badges)
    {
        $this->Badges[] = $badges;

        return $this;
    }

    /**
     * Remove Badges
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Badges $badges
     */
    public function removeBadge(\Nibynool\FitbitStorageBundle\Entity\Badges $badges)
    {
        $this->Badges->removeElement($badges);
    }

    /**
     * Get Badges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBadges()
    {
        return $this->Badges;
    }

    /**
     * Add WaterSummary
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\WaterSummary $waterSummary
     * @return Users
     */
    public function addWaterSummary(\Nibynool\FitbitStorageBundle\Entity\WaterSummary $waterSummary)
    {
        $this->WaterSummary[] = $waterSummary;

        return $this;
    }

    /**
     * Remove WaterSummary
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\WaterSummary $waterSummary
     */
    public function removeWaterSummary(\Nibynool\FitbitStorageBundle\Entity\WaterSummary $waterSummary)
    {
        $this->WaterSummary->removeElement($waterSummary);
    }

    /**
     * Get WaterSummary
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWaterSummary()
    {
        return $this->WaterSummary;
    }

    /**
     * Add Water
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Water $water
     * @return Users
     */
    public function addWater(\Nibynool\FitbitStorageBundle\Entity\Water $water)
    {
        $this->Water[] = $water;

        return $this;
    }

    /**
     * Remove Water
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Water $water
     */
    public function removeWater(\Nibynool\FitbitStorageBundle\Entity\Water $water)
    {
        $this->Water->removeElement($water);
    }

    /**
     * Get Water
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWater()
    {
        return $this->Water;
    }
}
