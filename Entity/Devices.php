<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_devices",
 *     indexes={@ORM\Index(name="user_idx", columns={"user_id"}),@ORM\Index(name="version_idx", columns={"device_version_id"})}
 * )
 */
class Devices
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    private $battery;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $last_sync_time;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Alarms", mappedBy="Device")
     */
    private $Alarms;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Devices")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\DeviceVersions", inversedBy="Devices")
     * @ORM\JoinColumn(name="device_version_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Version;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Alarms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Devices
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
     * Set battery
     *
     * @param string $battery
     * @return Devices
     */
    public function setBattery($battery)
    {
        $this->battery = $battery;

        return $this;
    }

    /**
     * Get battery
     *
     * @return string 
     */
    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * Set last_sync_time
     *
     * @param \DateTime $lastSyncTime
     * @return Devices
     */
    public function setLastSyncTime($lastSyncTime)
    {
        $this->last_sync_time = $lastSyncTime;

        return $this;
    }

    /**
     * Get last_sync_time
     *
     * @return \DateTime 
     */
    public function getLastSyncTime()
    {
        return $this->last_sync_time;
    }

    /**
     * Add Alarms
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Alarms $alarms
     * @return Devices
     */
    public function addAlarm(\Nibynool\FitbitStorageBundle\Entity\Alarms $alarms)
    {
        $this->Alarms[] = $alarms;

        return $this;
    }

    /**
     * Remove Alarms
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Alarms $alarms
     */
    public function removeAlarm(\Nibynool\FitbitStorageBundle\Entity\Alarms $alarms)
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

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Devices
     */
    public function setUser(\Nibynool\FitbitStorageBundle\Entity\Users $user)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set Version
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\DeviceVersions $version
     * @return Devices
     */
    public function setVersion(\Nibynool\FitbitStorageBundle\Entity\DeviceVersions $version)
    {
        $this->Version = $version;

        return $this;
    }

    /**
     * Get Version
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\DeviceVersions 
     */
    public function getVersion()
    {
        return $this->Version;
    }
}
