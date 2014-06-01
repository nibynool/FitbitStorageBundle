<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_days", uniqueConstraints={@ORM\UniqueConstraint(name="day_idx", columns={"day"})})
 */
class Days
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=10, nullable=false)
     */
    private $day;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\AlarmDays", mappedBy="Day")
     */
    private $Alarms;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Alarms = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set day
     *
     * @param string $day
     * @return Days
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Add Alarms
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AlarmDays $alarms
     * @return Days
     */
    public function addAlarm(\Nibynool\FitbitStorageBundle\Entity\AlarmDays $alarms)
    {
        $this->Alarms[] = $alarms;

        return $this;
    }

    /**
     * Remove Alarms
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AlarmDays $alarms
     */
    public function removeAlarm(\Nibynool\FitbitStorageBundle\Entity\AlarmDays $alarms)
    {
        $this->Alarms->removeElement($alarms);
    }

    /**
     * Get Alarms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlarms()
    {
        return $this->Alarms;
    }
}
