<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_activity_summaries",
 *     indexes={@ORM\Index(name="user_idx", columns={"user_id"})},
 *     uniqueConstraints={@ORM\UniqueConstraint(name="user_date_idx", columns={"user_id","date"})}
 * )
 */
class ActivitySummaries
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $activity_calories;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $calories_bmr;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $calories_out;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $elevation;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $fairly_active_minutes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $floors;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $lightly_active_minutes;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $marginal_calories;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $sedentary_minutes;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $steps;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $very_active_minutes;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances",
     *     mappedBy="Summaries"
     * )
     */
    private $Distances;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="ActivitySummaries")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Distances = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     * @return ActivitySummaries
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set activity_calories
     *
     * @param integer $activityCalories
     * @return ActivitySummaries
     */
    public function setActivityCalories($activityCalories)
    {
        $this->activity_calories = $activityCalories;

        return $this;
    }

    /**
     * Get activity_calories
     *
     * @return integer 
     */
    public function getActivityCalories()
    {
        return $this->activity_calories;
    }

    /**
     * Set calories_bmr
     *
     * @param integer $caloriesBmr
     * @return ActivitySummaries
     */
    public function setCaloriesBmr($caloriesBmr)
    {
        $this->calories_bmr = $caloriesBmr;

        return $this;
    }

    /**
     * Get calories_bmr
     *
     * @return integer 
     */
    public function getCaloriesBmr()
    {
        return $this->calories_bmr;
    }

    /**
     * Set calories_out
     *
     * @param integer $caloriesOut
     * @return ActivitySummaries
     */
    public function setCaloriesOut($caloriesOut)
    {
        $this->calories_out = $caloriesOut;

        return $this;
    }

    /**
     * Get calories_out
     *
     * @return integer 
     */
    public function getCaloriesOut()
    {
        return $this->calories_out;
    }

    /**
     * Set elevation
     *
     * @param string $elevation
     * @return ActivitySummaries
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * Get elevation
     *
     * @return string 
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * Set fairly_active_minutes
     *
     * @param integer $fairlyActiveMinutes
     * @return ActivitySummaries
     */
    public function setFairlyActiveMinutes($fairlyActiveMinutes)
    {
        $this->fairly_active_minutes = $fairlyActiveMinutes;

        return $this;
    }

    /**
     * Get fairly_active_minutes
     *
     * @return integer 
     */
    public function getFairlyActiveMinutes()
    {
        return $this->fairly_active_minutes;
    }

    /**
     * Set floors
     *
     * @param integer $floors
     * @return ActivitySummaries
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Get floors
     *
     * @return integer 
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set lightly_active_minutes
     *
     * @param integer $lightlyActiveMinutes
     * @return ActivitySummaries
     */
    public function setLightlyActiveMinutes($lightlyActiveMinutes)
    {
        $this->lightly_active_minutes = $lightlyActiveMinutes;

        return $this;
    }

    /**
     * Get lightly_active_minutes
     *
     * @return integer 
     */
    public function getLightlyActiveMinutes()
    {
        return $this->lightly_active_minutes;
    }

    /**
     * Set marginal_calories
     *
     * @param integer $marginalCalories
     * @return ActivitySummaries
     */
    public function setMarginalCalories($marginalCalories)
    {
        $this->marginal_calories = $marginalCalories;

        return $this;
    }

    /**
     * Get marginal_calories
     *
     * @return integer 
     */
    public function getMarginalCalories()
    {
        return $this->marginal_calories;
    }

    /**
     * Set sedentary_minutes
     *
     * @param integer $sedentaryMinutes
     * @return ActivitySummaries
     */
    public function setSedentaryMinutes($sedentaryMinutes)
    {
        $this->sedentary_minutes = $sedentaryMinutes;

        return $this;
    }

    /**
     * Get sedentary_minutes
     *
     * @return integer 
     */
    public function getSedentaryMinutes()
    {
        return $this->sedentary_minutes;
    }

    /**
     * Set steps
     *
     * @param integer $steps
     * @return ActivitySummaries
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * Get steps
     *
     * @return integer 
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Set very_active_minutes
     *
     * @param integer $veryActiveMinutes
     * @return ActivitySummaries
     */
    public function setVeryActiveMinutes($veryActiveMinutes)
    {
        $this->very_active_minutes = $veryActiveMinutes;

        return $this;
    }

    /**
     * Get very_active_minutes
     *
     * @return integer 
     */
    public function getVeryActiveMinutes()
    {
        return $this->very_active_minutes;
    }

    /**
     * Add Distances
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distances
     * @return ActivitySummaries
     */
    public function addDistance(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distances)
    {
        $this->Distances[] = $distances;

        return $this;
    }

    /**
     * Remove Distances
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distances
     */
    public function removeDistance(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distances)
    {
        $this->Distances->removeElement($distances);
    }

    /**
     * Get Distances
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDistances()
    {
        return $this->Distances;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return ActivitySummaries
     */
    public function setUser(\Nibynool\FitbitStorageBundle\Entity\Users $user)
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
}
