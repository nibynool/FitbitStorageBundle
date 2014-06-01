<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_badge_images",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="type_id_value_unit_idx", columns={"type_id","value","unit"})}
 * )
 */
class BadgeImages
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $value;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $unit;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $image_50;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $image_75;

    /**
     * @ORM\OneToMany(targetEntity="Nibynool\FitbitStorageBundle\Entity\Badges", mappedBy="Image")
     */
    private $Badges;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\BadgeTypes", inversedBy="Images")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Type;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Badges = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set value
     *
     * @param integer $value
     * @return BadgeImages
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
     * Set unit
     *
     * @param string $unit
     * @return BadgeImages
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set image_50
     *
     * @param string $image50
     * @return BadgeImages
     */
    public function setImage50($image50)
    {
        $this->image_50 = $image50;

        return $this;
    }

    /**
     * Get image_50
     *
     * @return string 
     */
    public function getImage50()
    {
        return $this->image_50;
    }

    /**
     * Set image_75
     *
     * @param string $image75
     * @return BadgeImages
     */
    public function setImage75($image75)
    {
        $this->image_75 = $image75;

        return $this;
    }

    /**
     * Get image_75
     *
     * @return string 
     */
    public function getImage75()
    {
        return $this->image_75;
    }

    /**
     * Add Badges
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Badges $badges
     * @return BadgeImages
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
     * Set Type
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BadgeTypes $type
     * @return BadgeImages
     */
    public function setType(\Nibynool\FitbitStorageBundle\Entity\BadgeTypes $type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\BadgeTypes 
     */
    public function getType()
    {
        return $this->Type;
    }
}
