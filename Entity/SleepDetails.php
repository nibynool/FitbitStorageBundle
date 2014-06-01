<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_sleep_details",
 *     indexes={@ORM\Index(name="sleep_idx", columns={"sleep_id"}),@ORM\Index(name="sleep_type_idx", columns={"sleep_type_id"})}
 * )
 */
class SleepDetails
{
    /**
     * @ORM\Id
     * @ORM\Column(type="datetime")
     */
    private $date_time;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Sleep", inversedBy="Details")
     * @ORM\JoinColumn(name="sleep_id", referencedColumnName="id", nullable=false, onDelete="restrict")
     */
    private $Sleep;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\SleepTypes")
     * @ORM\JoinColumn(name="sleep_type_id", referencedColumnName="id", nullable=false, onDelete="restrict")
     */
    private $Type;

    /**
     * Set date_time
     *
     * @param \DateTime $dateTime
     * @return SleepDetails
     */
    public function setDateTime($dateTime)
    {
        $this->date_time = $dateTime;

        return $this;
    }

    /**
     * Get date_time
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->date_time;
    }

    /**
     * Set Sleep
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Sleep $sleep
     * @return SleepDetails
     */
    public function setSleep(\Nibynool\FitbitStorageBundle\Entity\Sleep $sleep)
    {
        $this->Sleep = $sleep;

        return $this;
    }

    /**
     * Get Sleep
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Sleep 
     */
    public function getSleep()
    {
        return $this->Sleep;
    }

    /**
     * Set Type
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SleepTypes $type
     * @return SleepDetails
     */
    public function setType(\Nibynool\FitbitStorageBundle\Entity\SleepTypes $type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\SleepTypes 
     */
    public function getType()
    {
        return $this->Type;
    }
}
