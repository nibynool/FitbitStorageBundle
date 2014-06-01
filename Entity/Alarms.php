<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_alarms", indexes={@ORM\Index(name="device_idx", columns={"device_id"})})
 */
class Alarms
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $recurring;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $snooze_count;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $snooze_length;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $synced_to_device;

    /**
     * @ORM\Column(type="time", nullable=false)
     */
    private $time;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    private $vibrate;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\AlarmDays", mappedBy="Alarm")
     */
    private $Day;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Devices", inversedBy="Alarms")
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Device;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Day = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Alarms
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return Alarms
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Alarms
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Alarms
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set recurring
     *
     * @param boolean $recurring
     * @return Alarms
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;

        return $this;
    }

    /**
     * Get recurring
     *
     * @return boolean 
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Set snooze_count
     *
     * @param integer $snoozeCount
     * @return Alarms
     */
    public function setSnoozeCount($snoozeCount)
    {
        $this->snooze_count = $snoozeCount;

        return $this;
    }

    /**
     * Get snooze_count
     *
     * @return integer 
     */
    public function getSnoozeCount()
    {
        return $this->snooze_count;
    }

    /**
     * Set snooze_length
     *
     * @param integer $snoozeLength
     * @return Alarms
     */
    public function setSnoozeLength($snoozeLength)
    {
        $this->snooze_length = $snoozeLength;

        return $this;
    }

    /**
     * Get snooze_length
     *
     * @return integer 
     */
    public function getSnoozeLength()
    {
        return $this->snooze_length;
    }

    /**
     * Set synced_to_device
     *
     * @param boolean $syncedToDevice
     * @return Alarms
     */
    public function setSyncedToDevice($syncedToDevice)
    {
        $this->synced_to_device = $syncedToDevice;

        return $this;
    }

    /**
     * Get synced_to_device
     *
     * @return boolean 
     */
    public function getSyncedToDevice()
    {
        return $this->synced_to_device;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Alarms
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set vibrate
     *
     * @param string $vibrate
     * @return Alarms
     */
    public function setVibrate($vibrate)
    {
        $this->vibrate = $vibrate;

        return $this;
    }

    /**
     * Get vibrate
     *
     * @return string 
     */
    public function getVibrate()
    {
        return $this->vibrate;
    }

    /**
     * Add Day
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AlarmDays $day
     * @return Alarms
     */
    public function addDay(\Nibynool\FitbitStorageBundle\Entity\AlarmDays $day)
    {
        $this->Day[] = $day;

        return $this;
    }

    /**
     * Remove Day
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AlarmDays $day
     */
    public function removeDay(\Nibynool\FitbitStorageBundle\Entity\AlarmDays $day)
    {
        $this->Day->removeElement($day);
    }

    /**
     * Get Day
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * Set Device
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Devices $device
     * @return Alarms
     */
    public function setDevice(\Nibynool\FitbitStorageBundle\Entity\Devices $device)
    {
        $this->Device = $device;

        return $this;
    }

    /**
     * Get Device
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Devices 
     */
    public function getDevice()
    {
        return $this->Device;
    }
}
