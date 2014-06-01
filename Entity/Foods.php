<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_foods",
 *     indexes={
 *         @ORM\Index(name="name_idx", columns={"name"}),
 *         @ORM\Index(name="user_idx", columns={"user_id"}),
 *         @ORM\Index(name="unit_idx", columns={"unit_id"}),
 *         @ORM\Index(name="locale_idx", columns={"locale_id"})
 *     },
 *     uniqueConstraints={@ORM\UniqueConstraint(name="name_locale_id_idx", columns={"name","locale_id"})}
 * )
 */
class Foods
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $brand;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $calories;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $serving_size;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodServings", mappedBy="Food")
     */
    private $Servings;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodUnits", mappedBy="Foods")
     */
    private $DefaultUnit;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\NutritionalInformation", mappedBy="Food")
     */
    private $NutritionalInformation;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\MealFoods", mappedBy="Food")
     */
    private $Meals;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FavoriteFoods", mappedBy="Food")
     */
    private $FavouriteFood;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsConsumed", mappedBy="Food")
     */
    private $Consumptions;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="CustomFoods")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsUnits", inversedBy="Food")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=false, onDelete="restrict")
     */
    private $AvailableUnits;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Locales", inversedBy="Foods")
     * @ORM\JoinColumn(name="locale_id", referencedColumnName="id", nullable=false, onDelete="restrict")
     */
    private $Locale;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Servings = new \Doctrine\Common\Collections\ArrayCollection();
        $this->DefaultUnit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->NutritionalInformation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Meals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FavouriteFood = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Consumptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Foods
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set name
     *
     * @param string $name
     * @return Foods
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Foods
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set calories
     *
     * @param integer $calories
     * @return Foods
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return integer 
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set serving_size
     *
     * @param string $servingSize
     * @return Foods
     */
    public function setServingSize($servingSize)
    {
        $this->serving_size = $servingSize;

        return $this;
    }

    /**
     * Get serving_size
     *
     * @return string 
     */
    public function getServingSize()
    {
        return $this->serving_size;
    }

    /**
     * Add Servings
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodServings $servings
     * @return Foods
     */
    public function addServing(\Nibynool\FitbitStorageBundle\Entity\FoodServings $servings)
    {
        $this->Servings[] = $servings;

        return $this;
    }

    /**
     * Remove Servings
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodServings $servings
     */
    public function removeServing(\Nibynool\FitbitStorageBundle\Entity\FoodServings $servings)
    {
        $this->Servings->removeElement($servings);
    }

    /**
     * Get Servings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServings()
    {
        return $this->Servings;
    }

    /**
     * Add DefaultUnit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodUnits $defaultUnit
     * @return Foods
     */
    public function addDefaultUnit(\Nibynool\FitbitStorageBundle\Entity\FoodUnits $defaultUnit)
    {
        $this->DefaultUnit[] = $defaultUnit;

        return $this;
    }

    /**
     * Remove DefaultUnit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodUnits $defaultUnit
     */
    public function removeDefaultUnit(\Nibynool\FitbitStorageBundle\Entity\FoodUnits $defaultUnit)
    {
        $this->DefaultUnit->removeElement($defaultUnit);
    }

    /**
     * Get DefaultUnit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDefaultUnit()
    {
        return $this->DefaultUnit;
    }

    /**
     * Add NutritionalInformation
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\NutritionalInformation $nutritionalInformation
     * @return Foods
     */
    public function addNutritionalInformation(\Nibynool\FitbitStorageBundle\Entity\NutritionalInformation $nutritionalInformation)
    {
        $this->NutritionalInformation[] = $nutritionalInformation;

        return $this;
    }

    /**
     * Remove NutritionalInformation
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\NutritionalInformation $nutritionalInformation
     */
    public function removeNutritionalInformation(\Nibynool\FitbitStorageBundle\Entity\NutritionalInformation $nutritionalInformation)
    {
        $this->NutritionalInformation->removeElement($nutritionalInformation);
    }

    /**
     * Get NutritionalInformation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNutritionalInformation()
    {
        return $this->NutritionalInformation;
    }

    /**
     * Add Meals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\MealFoods $meals
     * @return Foods
     */
    public function addMeal(\Nibynool\FitbitStorageBundle\Entity\MealFoods $meals)
    {
        $this->Meals[] = $meals;

        return $this;
    }

    /**
     * Remove Meals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\MealFoods $meals
     */
    public function removeMeal(\Nibynool\FitbitStorageBundle\Entity\MealFoods $meals)
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
     * Add FavouriteFood
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favouriteFood
     * @return Foods
     */
    public function addFavouriteFood(\Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favouriteFood)
    {
        $this->FavouriteFood[] = $favouriteFood;

        return $this;
    }

    /**
     * Remove FavouriteFood
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favouriteFood
     */
    public function removeFavouriteFood(\Nibynool\FitbitStorageBundle\Entity\FavoriteFoods $favouriteFood)
    {
        $this->FavouriteFood->removeElement($favouriteFood);
    }

    /**
     * Get FavouriteFood
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavouriteFood()
    {
        return $this->FavouriteFood;
    }

    /**
     * Add Consumptions
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $consumptions
     * @return Foods
     */
    public function addConsumption(\Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $consumptions)
    {
        $this->Consumptions[] = $consumptions;

        return $this;
    }

    /**
     * Remove Consumptions
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $consumptions
     */
    public function removeConsumption(\Nibynool\FitbitStorageBundle\Entity\FoodsConsumed $consumptions)
    {
        $this->Consumptions->removeElement($consumptions);
    }

    /**
     * Get Consumptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsumptions()
    {
        return $this->Consumptions;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Foods
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
     * Set AvailableUnits
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsUnits $availableUnits
     * @return Foods
     */
    public function setAvailableUnits(\Nibynool\FitbitStorageBundle\Entity\FoodsUnits $availableUnits)
    {
        $this->AvailableUnits = $availableUnits;

        return $this;
    }

    /**
     * Get AvailableUnits
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\FoodsUnits 
     */
    public function getAvailableUnits()
    {
        return $this->AvailableUnits;
    }

    /**
     * Set Locale
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Locales $locale
     * @return Foods
     */
    public function setLocale(\Nibynool\FitbitStorageBundle\Entity\Locales $locale)
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
}
