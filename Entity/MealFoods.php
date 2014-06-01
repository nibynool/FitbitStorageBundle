<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_meal_foods",
 *     indexes={@ORM\Index(name="food_id_idx", columns={"food_id"}),@ORM\Index(name="unit_idx", columns={"unit_id"})}
 * )
 */
class MealFoods
{
    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $amount;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Meals", inversedBy="Food")
     * @ORM\JoinColumn(name="meal_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Meal;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", inversedBy="Meals")
     * @ORM\JoinColumn(name="food_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Food;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsUnits", inversedBy="Meals")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $FoodUnit;

    /**
     * Set amount
     *
     * @param integer $amount
     * @return MealFoods
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Meal
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Meals $meal
     * @return MealFoods
     */
    public function setMeal(\Nibynool\FitbitStorageBundle\Entity\Meals $meal)
    {
        $this->Meal = $meal;

        return $this;
    }

    /**
     * Get Meal
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Meals 
     */
    public function getMeal()
    {
        return $this->Meal;
    }

    /**
     * Set Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $food
     * @return MealFoods
     */
    public function setFood(\Nibynool\FitbitStorageBundle\Entity\Foods $food)
    {
        $this->Food = $food;

        return $this;
    }

    /**
     * Get Food
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Foods 
     */
    public function getFood()
    {
        return $this->Food;
    }

    /**
     * Set FoodUnit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsUnits $foodUnit
     * @return MealFoods
     */
    public function setFoodUnit(\Nibynool\FitbitStorageBundle\Entity\FoodsUnits $foodUnit)
    {
        $this->FoodUnit = $foodUnit;

        return $this;
    }

    /**
     * Get FoodUnit
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\FoodsUnits 
     */
    public function getFoodUnit()
    {
        return $this->FoodUnit;
    }
}
