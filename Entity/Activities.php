<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_activities",
 *     indexes={
 *         @ORM\Index(name="parent_idx", columns={"parent_id"}),
 *         @ORM\Index(name="user_idx", columns={"user_id"}),
 *         @ORM\Index(name="access_level_idx", columns={"access_level_id"})
 *     }
 * )
 */
class Activities
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $max_speed;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $min_speed;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $mets;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $has_speed;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Activities", mappedBy="Parent")
     */
    private $Children;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\FavoriteActivities", mappedBy="Activity")
     */
    private $UserFavoriteActivities;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Activities", inversedBy="Children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="cascade")
     */
    private $Parent;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Activities")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\AccessLevels", inversedBy="Activities")
     * @ORM\JoinColumn(name="access_level_id", referencedColumnName="id", onDelete="restrict")
     */
    private $AccessLevel;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->UserFavoriteActivities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Activities
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
     * Set name
     *
     * @param string $name
     * @return Activities
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
     * Set max_speed
     *
     * @param integer $maxSpeed
     * @return Activities
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->max_speed = $maxSpeed;

        return $this;
    }

    /**
     * Get max_speed
     *
     * @return integer 
     */
    public function getMaxSpeed()
    {
        return $this->max_speed;
    }

    /**
     * Set min_speed
     *
     * @param integer $minSpeed
     * @return Activities
     */
    public function setMinSpeed($minSpeed)
    {
        $this->min_speed = $minSpeed;

        return $this;
    }

    /**
     * Get min_speed
     *
     * @return integer 
     */
    public function getMinSpeed()
    {
        return $this->min_speed;
    }

    /**
     * Set mets
     *
     * @param string $mets
     * @return Activities
     */
    public function setMets($mets)
    {
        $this->mets = $mets;

        return $this;
    }

    /**
     * Get mets
     *
     * @return string 
     */
    public function getMets()
    {
        return $this->mets;
    }

    /**
     * Set has_speed
     *
     * @param boolean $hasSpeed
     * @return Activities
     */
    public function setHasSpeed($hasSpeed)
    {
        $this->has_speed = $hasSpeed;

        return $this;
    }

    /**
     * Get has_speed
     *
     * @return boolean 
     */
    public function getHasSpeed()
    {
        return $this->has_speed;
    }

    /**
     * Add Children
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $children
     * @return Activities
     */
    public function addChild(\Nibynool\FitbitStorageBundle\Entity\Activities $children)
    {
        $this->Children[] = $children;

        return $this;
    }

    /**
     * Remove Children
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $children
     */
    public function removeChild(\Nibynool\FitbitStorageBundle\Entity\Activities $children)
    {
        $this->Children->removeElement($children);
    }

    /**
     * Get Children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * Add UserFavoriteActivities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $userFavoriteActivities
     * @return Activities
     */
    public function addUserFavoriteActivity(\Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $userFavoriteActivities)
    {
        $this->UserFavoriteActivities[] = $userFavoriteActivities;

        return $this;
    }

    /**
     * Remove UserFavoriteActivities
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $userFavoriteActivities
     */
    public function removeUserFavoriteActivity(\Nibynool\FitbitStorageBundle\Entity\FavoriteActivities $userFavoriteActivities)
    {
        $this->UserFavoriteActivities->removeElement($userFavoriteActivities);
    }

    /**
     * Get UserFavoriteActivities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserFavoriteActivities()
    {
        return $this->UserFavoriteActivities;
    }

    /**
     * Set Parent
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Activities $parent
     * @return Activities
     */
    public function setParent(\Nibynool\FitbitStorageBundle\Entity\Activities $parent = null)
    {
        $this->Parent = $parent;

        return $this;
    }

    /**
     * Get Parent
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\Activities 
     */
    public function getParent()
    {
        return $this->Parent;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Activities
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
     * Set AccessLevel
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\AccessLevels $accessLevel
     * @return Activities
     */
    public function setAccessLevel(\Nibynool\FitbitStorageBundle\Entity\AccessLevels $accessLevel = null)
    {
        $this->AccessLevel = $accessLevel;

        return $this;
    }

    /**
     * Get AccessLevel
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\AccessLevels 
     */
    public function getAccessLevel()
    {
        return $this->AccessLevel;
    }
}
