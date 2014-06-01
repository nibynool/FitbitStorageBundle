<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_friends_leaderboard_lifetime", indexes={@ORM\Index(name="type_idx", columns={"type_id"})})
 */
class FriendLeaderboardLifetime
{
    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $value;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Friends", inversedBy="LifetimeLeaderboards")
     * @ORM\JoinColumn(name="friend_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Friend;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\LeaderboardTypes")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Type;

    /**
     * Set value
     *
     * @param integer $value
     * @return FriendLeaderboardLifetime
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Friend
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Friends $friend
     * @return FriendLeaderboardLifetime
     */
    public function setFriend(\Nibynool\FitbitStorageBundle\Entity\Friends $friend)
    {
        $this->Friend = $friend;

        return $this;
    }

    /**
     * Get Friend
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Friends 
     */
    public function getFriend()
    {
        return $this->Friend;
    }

    /**
     * Set Type
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\LeaderboardTypes $type
     * @return FriendLeaderboardLifetime
     */
    public function setType(\Nibynool\FitbitStorageBundle\Entity\LeaderboardTypes $type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\LeaderboardTypes 
     */
    public function getType()
    {
        return $this->Type;
    }
}
