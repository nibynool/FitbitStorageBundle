<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_access_levels", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 */
class AccessLevels
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=45, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Activities", mappedBy="AccessLevel")
     */
    private $Activities;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Activities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return AccessLevels
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
     * Add Activities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $activities
     * @return AccessLevels
     */
    public function addActivity(\Nibynool\FitbitStorageBundle\Entity\Activities $activities)
    {
        $this->Activities[] = $activities;

        return $this;
    }

    /**
     * Remove Activities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $activities
     */
    public function removeActivity(\Nibynool\FitbitStorageBundle\Entity\Activities $activities)
    {
        $this->Activities->removeElement($activities);
    }

    /**
     * Get Activities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivities()
    {
        return $this->Activities;
    }
}
