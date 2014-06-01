<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_friend_requests", indexes={@ORM\Index(name="friend_idx", columns={"friend_id"})})
 */
class FriendRequests
{
    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $datetime;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="FriendRequests")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Profiles", inversedBy="FriendRequests")
     * @ORM\JoinColumn(name="friend_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $FriendProfile;

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     * @return FriendRequests
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return FriendRequests
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
     * Set FriendProfile
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Profiles $friendProfile
     * @return FriendRequests
     */
    public function setFriendProfile(\Nibynool\FitbitStorageBundle\Entity\Profiles $friendProfile)
    {
        $this->FriendProfile = $friendProfile;

        return $this;
    }

    /**
     * Get FriendProfile
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Profiles 
     */
    public function getFriendProfile()
    {
        return $this->FriendProfile;
    }
}
