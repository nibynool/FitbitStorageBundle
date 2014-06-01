<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_favorite_foods", indexes={@ORM\Index(name="food_idx", columns={"food_id"})})
 */
class FavoriteFoods
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="FavoriteFoods")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", inversedBy="FavouriteFood")
     * @ORM\JoinColumn(name="food_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Food;

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return FavoriteFoods
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
     * @return FavoriteFoods
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
}
