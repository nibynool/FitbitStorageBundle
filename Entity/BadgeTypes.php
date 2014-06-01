<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_badge_types",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="name_idx", columns={"name"})}
 * )
 */
class BadgeTypes
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
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Badges", mappedBy="Type")
     */
    private $Badges;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\BadgeImages", mappedBy="Type")
     */
    private $Images;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Badges = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Images = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return BadgeTypes
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
     * Add Badges
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Badges $badges
     * @return BadgeTypes
     */
    public function addBadge(\Nibynool\FitbitStorageBundle\Entity\Badges $badges)
    {
        $this->Badges[] = $badges;

        return $this;
    }

    /**
     * Remove Badges
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Badges $badges
     */
    public function removeBadge(\Nibynool\FitbitStorageBundle\Entity\Badges $badges)
    {
        $this->Badges->removeElement($badges);
    }

    /**
     * Get Badges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBadges()
    {
        return $this->Badges;
    }

    /**
     * Add Images
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BadgeImages $images
     * @return BadgeTypes
     */
    public function addImage(\Nibynool\FitbitStorageBundle\Entity\BadgeImages $images)
    {
        $this->Images[] = $images;

        return $this;
    }

    /**
     * Remove Images
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BadgeImages $images
     */
    public function removeImage(\Nibynool\FitbitStorageBundle\Entity\BadgeImages $images)
    {
        $this->Images->removeElement($images);
    }

    /**
     * Get Images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->Images;
    }
}
