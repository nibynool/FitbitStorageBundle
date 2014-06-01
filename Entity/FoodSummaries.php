<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_food_summaries",
 *     indexes={@ORM\Index(name="nutritional_name_idx", columns={"nutritional_name_id"})}
 * )
 */
class FoodSummaries
{
    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $value;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="FoodSummary")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\NutritionalNames")
     * @ORM\JoinColumn(name="nutritional_name_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $NutritionalItem;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return FoodSummaries
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
     * Set value
     *
     * @param string $value
     * @return FoodSummaries
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return FoodSummaries
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
     * Set NutritionalItem
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\NutritionalNames $nutritionalItem
     * @return FoodSummaries
     */
    public function setNutritionalItem(\Nibynool\FitbitStorageBundle\Entity\NutritionalNames $nutritionalItem)
    {
        $this->NutritionalItem = $nutritionalItem;

        return $this;
    }

    /**
     * Get NutritionalItem
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\NutritionalNames 
     */
    public function getNutritionalItem()
    {
        return $this->NutritionalItem;
    }
}
