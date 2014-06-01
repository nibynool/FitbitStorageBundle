<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_friends",
 *     indexes={@ORM\Index(name="fitbit_fr_p", columns={"profile_id"}),@ORM\Index(name="fitbit_fr_u", columns={"user_id"})},
 *     uniqueConstraints={@ORM\UniqueConstraint(name="friend", columns={"user_id","profile_id"})}
 * )
 */
class Friends
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardAverages", mappedBy="Friend")
     */
    private $AverageLeaderboards;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardLifetime", mappedBy="Friend")
     */
    private $LifetimeLeaderboards;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardRank", mappedBy="Friend")
     */
    private $RankLeaderboard;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardSummary", mappedBy="Friend")
     */
    private $SummaryLeaderboard;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Profiles", inversedBy="Friends")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id", nullable=false, onDelete="restrict")
     */
    private $FriendProfile;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Friends")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->AverageLeaderboards = new \Doctrine\Common\Collections\ArrayCollection();
        $this->LifetimeLeaderboards = new \Doctrine\Common\Collections\ArrayCollection();
        $this->RankLeaderboard = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SummaryLeaderboard = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add AverageLeaderboards
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardAverages $averageLeaderboards
     * @return Friends
     */
    public function addAverageLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardAverages $averageLeaderboards)
    {
        $this->AverageLeaderboards[] = $averageLeaderboards;

        return $this;
    }

    /**
     * Remove AverageLeaderboards
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardAverages $averageLeaderboards
     */
    public function removeAverageLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardAverages $averageLeaderboards)
    {
        $this->AverageLeaderboards->removeElement($averageLeaderboards);
    }

    /**
     * Get AverageLeaderboards
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAverageLeaderboards()
    {
        return $this->AverageLeaderboards;
    }

    /**
     * Add LifetimeLeaderboards
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardLifetime $lifetimeLeaderboards
     * @return Friends
     */
    public function addLifetimeLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardLifetime $lifetimeLeaderboards)
    {
        $this->LifetimeLeaderboards[] = $lifetimeLeaderboards;

        return $this;
    }

    /**
     * Remove LifetimeLeaderboards
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardLifetime $lifetimeLeaderboards
     */
    public function removeLifetimeLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardLifetime $lifetimeLeaderboards)
    {
        $this->LifetimeLeaderboards->removeElement($lifetimeLeaderboards);
    }

    /**
     * Get LifetimeLeaderboards
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLifetimeLeaderboards()
    {
        return $this->LifetimeLeaderboards;
    }

    /**
     * Add RankLeaderboard
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardRank $rankLeaderboard
     * @return Friends
     */
    public function addRankLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardRank $rankLeaderboard)
    {
        $this->RankLeaderboard[] = $rankLeaderboard;

        return $this;
    }

    /**
     * Remove RankLeaderboard
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardRank $rankLeaderboard
     */
    public function removeRankLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardRank $rankLeaderboard)
    {
        $this->RankLeaderboard->removeElement($rankLeaderboard);
    }

    /**
     * Get RankLeaderboard
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRankLeaderboard()
    {
        return $this->RankLeaderboard;
    }

    /**
     * Add SummaryLeaderboard
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardSummary $summaryLeaderboard
     * @return Friends
     */
    public function addSummaryLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardSummary $summaryLeaderboard)
    {
        $this->SummaryLeaderboard[] = $summaryLeaderboard;

        return $this;
    }

    /**
     * Remove SummaryLeaderboard
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardSummary $summaryLeaderboard
     */
    public function removeSummaryLeaderboard(\Nibynool\FitbitStorageBundle\Entity\FriendLeaderboardSummary $summaryLeaderboard)
    {
        $this->SummaryLeaderboard->removeElement($summaryLeaderboard);
    }

    /**
     * Get SummaryLeaderboard
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSummaryLeaderboard()
    {
        return $this->SummaryLeaderboard;
    }

    /**
     * Set FriendProfile
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Profiles $friendProfile
     * @return Friends
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

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Friends
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
