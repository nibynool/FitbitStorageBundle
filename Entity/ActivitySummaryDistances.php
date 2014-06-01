<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_activity_summary_distances",
 *     indexes={@ORM\Index(name="activity_idx", columns={"activity_id"})}
 * )
 */
class ActivitySummaryDistances
{
    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $distance;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivitySummaries", inversedBy="Distances")
     * @ORM\JoinColumn(name="summary_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Summaries;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(
     *     targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistanceActivities",
     *     inversedBy="Distance"
     * )
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Activities;

    /**
     * Set distance
     *
     * @param string $distance
     * @return ActivitySummaryDistances
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return string 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set Summaries
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaries $summaries
     * @return ActivitySummaryDistances
     */
    public function setSummaries(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaries $summaries)
    {
        $this->Summaries = $summaries;

        return $this;
    }

    /**
     * Get Summaries
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\ActivitySummaries 
     */
    public function getSummaries()
    {
        return $this->Summaries;
    }

    /**
     * Set Activities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistanceActivities $activities
     * @return ActivitySummaryDistances
     */
    public function setActivities(\Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistanceActivities $activities)
    {
        $this->Activities = $activities;

        return $this;
    }

    /**
     * Get Activities
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\ActivitySummaryDistanceActivities 
     */
    public function getActivities()
    {
        return $this->Activities;
    }
}
