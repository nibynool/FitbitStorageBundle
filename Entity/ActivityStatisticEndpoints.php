<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_activity_statistic_endpoints",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="name_idx", columns={"name"})}
 * )
 */
class ActivityStatisticEndpoints
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
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics", mappedBy="EndPoint")
     */
    private $BestStatistics;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics",
     *     mappedBy="EndPoint"
     * )
     */
    private $LifetimeStatistics;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->BestStatistics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->LifetimeStatistics = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ActivityStatisticEndpoints
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
     * Add BestStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics
     * @return ActivityStatisticEndpoints
     */
    public function addBestStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics)
    {
        $this->BestStatistics[] = $bestStatistics;

        return $this;
    }

    /**
     * Remove BestStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics
     */
    public function removeBestStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityBestStatistics $bestStatistics)
    {
        $this->BestStatistics->removeElement($bestStatistics);
    }

    /**
     * Get BestStatistics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBestStatistics()
    {
        return $this->BestStatistics;
    }

    /**
     * Add LifetimeStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics
     * @return ActivityStatisticEndpoints
     */
    public function addLifetimeStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics)
    {
        $this->LifetimeStatistics[] = $lifetimeStatistics;

        return $this;
    }

    /**
     * Remove LifetimeStatistics
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics
     */
    public function removeLifetimeStatistic(\Nibynool\FitbitStorageBundle\Entity\ActivityLifetimeStatistics $lifetimeStatistics)
    {
        $this->LifetimeStatistics->removeElement($lifetimeStatistics);
    }

    /**
     * Get LifetimeStatistics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLifetimeStatistics()
    {
        return $this->LifetimeStatistics;
    }
}
