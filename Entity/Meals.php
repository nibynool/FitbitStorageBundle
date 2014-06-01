<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_meals", indexes={@ORM\Index(name="user_idx", columns={"user_id"})})
 */
class Meals
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\MealFoods", mappedBy="Meal")
     */
    private $Food;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Meals")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="cascade")
     */
    private $User;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Food = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Meals
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
     * Set description
     *
     * @param string $description
     * @return Meals
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Meals
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
     * Add Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\MealFoods $food
     * @return Meals
     */
    public function addFood(\Nibynool\FitbitStorageBundle\Entity\MealFoods $food)
    {
        $this->Food[] = $food;

        return $this;
    }

    /**
     * Remove Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\MealFoods $food
     */
    public function removeFood(\Nibynool\FitbitStorageBundle\Entity\MealFoods $food)
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
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Meals
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
}
