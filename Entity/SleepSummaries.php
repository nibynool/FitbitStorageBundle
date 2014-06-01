<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_sleep_summaries", indexes={@ORM\Index(name="user_idx", columns={"user_id"})})
 */
class SleepSummaries
{
    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $time_asleep;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $sleep_records;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $time_in_bed;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="SleepSummaries")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="restrict")
     */
    private $User;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return SleepSummaries
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time_asleep
     *
     * @param integer $timeAsleep
     * @return SleepSummaries
     */
    public function setTimeAsleep($timeAsleep)
    {
        $this->time_asleep = $timeAsleep;

        return $this;
    }

    /**
     * Get time_asleep
     *
     * @return integer 
     */
    public function getTimeAsleep()
    {
        return $this->time_asleep;
    }

    /**
     * Set sleep_records
     *
     * @param integer $sleepRecords
     * @return SleepSummaries
     */
    public function setSleepRecords($sleepRecords)
    {
        $this->sleep_records = $sleepRecords;

        return $this;
    }

    /**
     * Get sleep_records
     *
     * @return integer 
     */
    public function getSleepRecords()
    {
        return $this->sleep_records;
    }

    /**
     * Set time_in_bed
     *
     * @param integer $timeInBed
     * @return SleepSummaries
     */
    public function setTimeInBed($timeInBed)
    {
        $this->time_in_bed = $timeInBed;

        return $this;
    }

    /**
     * Get time_in_bed
     *
     * @return integer 
     */
    public function getTimeInBed()
    {
        return $this->time_in_bed;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return SleepSummaries
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
}
