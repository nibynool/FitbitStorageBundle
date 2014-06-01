<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_food_nutritional_information",
 *     indexes={@ORM\Index(name="nutritional_names_idx", columns={"nutritional_name_id"})}
 * )
 */
class NutritionalInformation
{
    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $value;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", inversedBy="NutritionalInformation")
     * @ORM\JoinColumn(name="food_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Food;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\NutritionalNames")
     * @ORM\JoinColumn(name="nutritional_name_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Name;

    /**
     * Set value
     *
     * @param integer $value
     * @return NutritionalInformation
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Food
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $food
     * @return NutritionalInformation
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
     * Set Name
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\NutritionalNames $name
     * @return NutritionalInformation
     */
    public function setName(\Nibynool\FitbitStorageBundle\Entity\NutritionalNames $name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\NutritionalNames 
     */
    public function getName()
    {
        return $this->Name;
    }
}
