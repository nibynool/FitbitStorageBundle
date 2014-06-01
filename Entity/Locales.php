<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_locales", uniqueConstraints={@ORM\UniqueConstraint(name="name_idx", columns={"name"})})
 */
class Locales
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=5, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Foods", mappedBy="Locale")
     */
    private $Foods;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Foods = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Locales
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
     * Add Foods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $foods
     * @return Locales
     */
    public function addFood(\Nibynool\FitbitStorageBundle\Entity\Foods $foods)
    {
        $this->Foods[] = $foods;

        return $this;
    }

    /**
     * Remove Foods
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Foods $foods
     */
    public function removeFood(\Nibynool\FitbitStorageBundle\Entity\Foods $foods)
    {
        $this->Foods->removeElement($foods);
    }

    /**
     * Get Foods
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFoods()
    {
        return $this->Foods;
    }
}
