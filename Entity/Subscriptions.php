<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_subscriptions",
 *     indexes={@ORM\Index(name="user_idx", columns={"user_id"}),@ORM\Index(name="collection_idx", columns={"collection_id"})}
 * )
 */
class Subscriptions
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $subscriber;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Subscriptions")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\SubscriptionType", inversedBy="Subscriptions")
     * @ORM\JoinColumn(name="collection_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Type;

    /**
     * Set id
     *
     * @param integer $id
     * @return Subscriptions
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
     * Set subscriber
     *
     * @param integer $subscriber
     * @return Subscriptions
     */
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get subscriber
     *
     * @return integer 
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Subscriptions
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
     * Set Type
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\SubscriptionType $type
     * @return Subscriptions
     */
    public function setType(\Nibynool\FitbitStorageBundle\Entity\SubscriptionType $type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\SubscriptionType 
     */
    public function getType()
    {
        return $this->Type;
    }
}
