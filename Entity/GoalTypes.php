<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_goal_types", uniqueConstraints={@ORM\UniqueConstraint(name="name_idx", columns={"name"})})
 */
class GoalTypes
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Goals", mappedBy="Type")
     */
    private $Goals;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Goals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return GoalTypes
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
     * Add Goals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Goals $goals
     * @return GoalTypes
     */
    public function addGoal(\Nibynool\FitbitStorageBundle\Entity\Goals $goals)
    {
        $this->Goals[] = $goals;

        return $this;
    }

    /**
     * Remove Goals
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Goals $goals
     */
    public function removeGoal(\Nibynool\FitbitStorageBundle\Entity\Goals $goals)
    {
        $this->Goals->removeElement($goals);
    }

    /**
     * Get Goals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoals()
    {
        return $this->Goals;
    }
}
