<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_device_versions",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="version_idx", columns={"version"})}
 * )
 */
class DeviceVersions
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
    private $version;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Devices", mappedBy="Version")
     */
    private $Devices;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Devices = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set version
     *
     * @param string $version
     * @return DeviceVersions
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return DeviceVersions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add Devices
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Devices $devices
     * @return DeviceVersions
     */
    public function addDevice(\Nibynool\FitbitStorageBundle\Entity\Devices $devices)
    {
        $this->Devices[] = $devices;

        return $this;
    }

    /**
     * Remove Devices
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Devices $devices
     */
    public function removeDevice(\Nibynool\FitbitStorageBundle\Entity\Devices $devices)
    {
        $this->Devices->removeElement($devices);
    }

    /**
     * Get Devices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevices()
    {
        return $this->Devices;
    }
}
