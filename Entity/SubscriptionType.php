<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_subscription_collection_types",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="name_idx", columns={"name"})}
 * )
 */
class SubscriptionType
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Subscriptions", mappedBy="Type")
     */
    private $Subscriptions;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Subscriptions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return SubscriptionType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add Subscriptions
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions
     * @return SubscriptionType
     */
    public function addSubscription(\Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions)
    {
        $this->Subscriptions[] = $subscriptions;

        return $this;
    }

    /**
     * Remove Subscriptions
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions
     */
    public function removeSubscription(\Nibynool\FitbitStorageBundle\Entity\Subscriptions $subscriptions)
    {
        $this->Subscriptions->removeElement($subscriptions);
    }

    /**
     * Get Subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptions()
    {
        return $this->Subscriptions;
    }
}
