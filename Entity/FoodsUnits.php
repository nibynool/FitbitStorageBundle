<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_foods_unit")
 */
class FoodsUnits
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
    private $plural;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", mappedBy="AvailableUnits")
     */
    private $Food;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\MealFoods", mappedBy="FoodUnit")
     */
    private $Meals;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Food = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Meals = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return FoodsUnits
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
     * @return FoodsUnits
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
     * Set plural
     *
     * @param string $plural
     * @return FoodsUnits
     */
    public function setPlural($plural)
    {
        $this->plural = $plural;

        return $this;
    }

    /**
     * Get plural
     *
     * @return string 
     */
    public function getPlural()
    {
        return $this->plural;
    }

    /**
     * Add Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $food
     * @return FoodsUnits
     */
    public function addFood(\Nibynool\FitbitStorageBundle\Entity\Foods $food)
    {
        $this->Food[] = $food;

        return $this;
    }

    /**
     * Remove Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $food
     */
    public function removeFood(\Nibynool\FitbitStorageBundle\Entity\Foods $food)
    {
        $this->Food->removeElement($food);
    }

    /**
     * Get Food
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFood()
    {
        return $this->Food;
    }

    /**
     * Add Meals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\MealFoods $meals
     * @return FoodsUnits
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
}
