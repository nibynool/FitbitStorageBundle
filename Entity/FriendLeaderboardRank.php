<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_friends_leaderboard_rank", indexes={@ORM\Index(name="type_idx", columns={"type_id"})})
 */
class FriendLeaderboardRank
{
    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $rank;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Friends", inversedBy="RankLeaderboard")
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
     * Set rank
     *
     * @param integer $rank
     * @return FriendLeaderboardRank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set Friend
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Friends $friend
     * @return FriendLeaderboardRank
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
     * @return FriendLeaderboardRank
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
