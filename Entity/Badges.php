<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_badges",
 *     indexes={@ORM\Index(name="type_idx", columns={"type_id"}),@ORM\Index(name="image_idx", columns={"image_id"})}
 * )
 */
class Badges
{
    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $value;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $times_achieved;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $unit;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Badges")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\BadgeTypes", inversedBy="Badges")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Type;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\BadgeImages", inversedBy="Badges")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Image;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Badges
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set value
     *
     * @param integer $value
     * @return Badges
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
     * Set times_achieved
     *
     * @param integer $timesAchieved
     * @return Badges
     */
    public function setTimesAchieved($timesAchieved)
    {
        $this->times_achieved = $timesAchieved;

        return $this;
    }

    /**
     * Get times_achieved
     *
     * @return integer 
     */
    public function getTimesAchieved()
    {
        return $this->times_achieved;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Badges
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
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Badges
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
     * @param \Nibynool\FitbitStorageBundle\Entity\BadgeTypes $type
     * @return Badges
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

    /**
     * Set Image
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\BadgeImages $image
     * @return Badges
     */
    public function setImage(\Nibynool\FitbitStorageBundle\Entity\BadgeImages $image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * Get Image
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\BadgeImages 
     */
    public function getImage()
    {
        return $this->Image;
    }
}
