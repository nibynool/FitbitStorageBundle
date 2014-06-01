<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_favorite_activities", indexes={@ORM\Index(name="activity_idx", columns={"activity_id"})})
 */
class FavoriteActivities
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="FavoriteActivities")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(
     *     targetEntity="Nibynool\FitbitStorageBundle\Entity\Activities",
     *     inversedBy="UserFavoriteActivities"
     * )
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Activity;

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return FavoriteActivities
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
     * Set Activity
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $activity
     * @return FavoriteActivities
     */
    public function setActivity(\Nibynool\FitbitStorageBundle\Entity\Activities $activity)
    {
        $this->Activity = $activity;

        return $this;
    }

    /**
     * Get Activity
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Activities 
     */
    public function getActivity()
    {
        return $this->Activity;
    }
}
