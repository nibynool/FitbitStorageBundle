<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_subscription_update_logs",
 *     indexes={@ORM\Index(name="user_idx", columns={"user_id"})},
 *     uniqueConstraints={@ORM\UniqueConstraint(name="log_idx", columns={"log_id"})}
 * )
 */
class SubscriptionUpdates
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $notification_timestamp;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $end_point;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $update_date;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $update_timestamp;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="SubscriptionUpdates")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="restrict")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\RequestLogs", inversedBy="SubscriptionUpdates")
     * @ORM\JoinColumn(name="log_id", referencedColumnName="id", onDelete="restrict")
     */
    private $RequestLog;

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
     * Set notification_timestamp
     *
     * @param \DateTime $notificationTimestamp
     * @return SubscriptionUpdates
     */
    public function setNotificationTimestamp($notificationTimestamp)
    {
        $this->notification_timestamp = $notificationTimestamp;

        return $this;
    }

    /**
     * Get notification_timestamp
     *
     * @return \DateTime 
     */
    public function getNotificationTimestamp()
    {
        return $this->notification_timestamp;
    }

    /**
     * Set end_point
     *
     * @param string $endPoint
     * @return SubscriptionUpdates
     */
    public function setEndPoint($endPoint)
    {
        $this->end_point = $endPoint;

        return $this;
    }

    /**
     * Get end_point
     *
     * @return string 
     */
    public function getEndPoint()
    {
        return $this->end_point;
    }

    /**
     * Set update_date
     *
     * @param \DateTime $updateDate
     * @return SubscriptionUpdates
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get update_date
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set update_timestamp
     *
     * @param \DateTime $updateTimestamp
     * @return SubscriptionUpdates
     */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->update_timestamp = $updateTimestamp;

        return $this;
    }

    /**
     * Get update_timestamp
     *
     * @return \DateTime 
     */
    public function getUpdateTimestamp()
    {
        return $this->update_timestamp;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return SubscriptionUpdates
     */
    public function setUser(\Nibynool\FitbitStorageBundle\Entity\Users $user = null)
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
     * Set RequestLog
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\RequestLogs $requestLog
     * @return SubscriptionUpdates
     */
    public function setRequestLog(\Nibynool\FitbitStorageBundle\Entity\RequestLogs $requestLog = null)
    {
        $this->RequestLog = $requestLog;

        return $this;
    }

    /**
     * Get RequestLog
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\RequestLogs 
     */
    public function getRequestLog()
    {
        return $this->RequestLog;
    }
}
