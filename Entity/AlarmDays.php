<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_alarm_days", indexes={@ORM\Index(name="day_idx", columns={"day_id"})})
 */
class AlarmDays
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Alarms", inversedBy="Day")
     * @ORM\JoinColumn(name="alarm_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Alarm;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Days", inversedBy="Alarms")
     * @ORM\JoinColumn(name="day_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Day;

    /**
     * Set Alarm
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Alarms $alarm
     * @return AlarmDays
     */
    public function setAlarm(\Nibynool\FitbitStorageBundle\Entity\Alarms $alarm)
    {
        $this->Alarm = $alarm;

        return $this;
    }

    /**
     * Get Alarm
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Alarms 
     */
    public function getAlarm()
    {
        return $this->Alarm;
    }

    /**
     * Set Day
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Days $day
     * @return AlarmDays
     */
    public function setDay(\Nibynool\FitbitStorageBundle\Entity\Days $day)
    {
        $this->Day = $day;

        return $this;
    }

    /**
     * Get Day
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Days 
     */
    public function getDay()
    {
        return $this->Day;
    }
}
