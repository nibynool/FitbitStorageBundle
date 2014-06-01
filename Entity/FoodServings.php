<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_food_servings",
 *     indexes={@ORM\Index(name="food_idx", columns={"food_id"}),@ORM\Index(name="unit_idx", columns={"unit_id"})}
 * )
 */
class FoodServings
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $multiplier;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $serving_size;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", inversedBy="Servings")
     * @ORM\JoinColumn(name="food_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Food;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsUnits")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Unit;

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
     * Set multiplier
     *
     * @param integer $multiplier
     * @return FoodServings
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;

        return $this;
    }

    /**
     * Get multiplier
     *
     * @return integer 
     */
    public function getMultiplier()
    {
        return $this->multiplier;
    }

    /**
     * Set serving_size
     *
     * @param string $servingSize
     * @return FoodServings
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
     * Set Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $food
     * @return FoodServings
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
     * Set Unit
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FoodsUnits $unit
     * @return FoodServings
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
