<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_foods_consumed",
 *     indexes={
 *         @ORM\Index(name="user_idx", columns={"user_id"}),
 *         @ORM\Index(name="food_idx", columns={"food_id"}),
 *         @ORM\Index(name="unit_idx", columns={"unit_id"})
 *     }
 * )
 */
class FoodsConsumed
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $amount;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="FoodsConsumed")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", inversedBy="Consumptions")
     * @ORM\JoinColumn(name="food_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Food;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\FoodsUnits")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Unit;

    /**
     * Set id
     *
     * @param integer $id
     * @return FoodsConsumed
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
     * Set date
     *
     * @param \DateTime $date
     * @return FoodsConsumed
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
     * Set amount
     *
     * @param string $amount
     * @return FoodsConsumed
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return FoodsConsumed
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

    /**
     * Set Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $food
     * @return FoodsConsumed
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
     * @return FoodsConsumed
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
