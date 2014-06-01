<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_request_logs", indexes={@ORM\Index(name="user_idx", columns={"user_id"})})
 */
class RequestLogs
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
    private $request_timestamp;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $end_point;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $result;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates", mappedBy="RequestLog")
     */
    private $SubscriptionUpdates;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Requests")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="restrict")
     */
    private $User;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->SubscriptionUpdates = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set request_timestamp
     *
     * @param \DateTime $requestTimestamp
     * @return RequestLogs
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->request_timestamp = $requestTimestamp;

        return $this;
    }

    /**
     * Get request_timestamp
     *
     * @return \DateTime 
     */
    public function getRequestTimestamp()
    {
        return $this->request_timestamp;
    }

    /**
     * Set end_point
     *
     * @param string $endPoint
     * @return RequestLogs
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
     * Set result
     *
     * @param string $result
     * @return RequestLogs
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Add SubscriptionUpdates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates
     * @return RequestLogs
     */
    public function addSubscriptionUpdate(\Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates)
    {
        $this->SubscriptionUpdates[] = $subscriptionUpdates;

        return $this;
    }

    /**
     * Remove SubscriptionUpdates
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates
     */
    public function removeSubscriptionUpdate(\Nibynool\FitbitStorageBundle\Entity\SubscriptionUpdates $subscriptionUpdates)
    {
        $this->SubscriptionUpdates->removeElement($subscriptionUpdates);
    }

    /**
     * Get SubscriptionUpdates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptionUpdates()
    {
        return $this->SubscriptionUpdates;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return RequestLogs
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
}
