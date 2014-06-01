<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_activity_best_statistics",
 *     indexes={@ORM\Index(name="user_idx", columns={"user_id"}),@ORM\Index(name="endpoint_idx", columns={"endpoint_id"})}
 * )
 */
class ActivityBestStatistics
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $tracker;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="BestStatistics")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="Nibynool\FitbitStorageBundle\Entity\ActivityStatisticEndpoints",
     *     inversedBy="BestStatistics"
     * )
     * @ORM\JoinColumn(name="endpoint_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $EndPoint;

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
     * Set tracker
     *
     * @param boolean $tracker
     * @return ActivityBestStatistics
     */
    public function setTracker($tracker)
    {
        $this->tracker = $tracker;

        return $this;
    }

    /**
     * Get tracker
     *
     * @return boolean 
     */
    public function getTracker()
    {
        return $this->tracker;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ActivityBestStatistics
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
     * Set value
     *
     * @param string $value
     * @return ActivityBestStatistics
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return ActivityBestStatistics
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
     * Set EndPoint
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\ActivityStatisticEndpoints $endPoint
     * @return ActivityBestStatistics
     */
    public function setEndPoint(\Nibynool\FitbitStorageBundle\Entity\ActivityStatisticEndpoints $endPoint)
    {
        $this->EndPoint = $endPoint;

        return $this;
    }

    /**
     * Get EndPoint
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\ActivityStatisticEndpoints 
     */
    public function getEndPoint()
    {
        return $this->EndPoint;
    }
}
