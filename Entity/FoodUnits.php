<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_food_units", indexes={@ORM\Index(name="unit_idx", columns={"unit_id"})})
 */
class FoodUnits
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", inversedBy="DefaultUnit")
     * @ORM\JoinColumn(name="food_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Foods;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsUnits")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Unit;

    /**
     * Set Foods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $foods
     * @return FoodUnits
     */
    public function setFoods(\Nibynool\FitbitStorageBundle\Entity\Foods $foods)
    {
        $this->Foods = $foods;

        return $this;
    }

    /**
     * Get Foods
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Foods 
     */
    public function getFoods()
    {
        return $this->Foods;
    }

    /**
     * Set Unit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsUnits $unit
     * @return FoodUnits
     */
    public function setUnit(\Nibynool\FitbitStorageBundle\Entity\FoodsUnits $unit)
    {
        $this->Unit = $unit;

        return $this;
    }

    /**
     * Get Unit
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\FoodsUnits 
     */
    public function getUnit()
    {
        return $this->Unit;
    }
}
