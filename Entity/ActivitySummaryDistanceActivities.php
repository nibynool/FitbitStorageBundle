<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_activity_summary_distance_activities",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="name_idx", columns={"name"})}
 * )
 */
class ActivitySummaryDistanceActivities
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances",
     *     mappedBy="Activities"
     * )
     */
    private $Distance;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Distance = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ActivitySummaryDistanceActivities
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
     * Add Distance
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distance
     * @return ActivitySummaryDistanceActivities
     */
    public function addDistance(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distance)
    {
        $this->Distance[] = $distance;

        return $this;
    }

    /**
     * Remove Distance
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distance
     */
    public function removeDistance(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistances $distance)
    {
        $this->Distance->removeElement($distance);
    }

    /**
     * Get Distance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDistance()
    {
        return $this->Distance;
    }
}
