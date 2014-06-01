<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_goals", indexes={@ORM\Index(name="goal_type_idx", columns={"goal_type_id"})})
 */
class Goals
{
    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $value;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Goals")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\GoalTypes", inversedBy="Goals")
     * @ORM\JoinColumn(name="goal_type_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $Type;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Goals
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
     * @param string $value
     * @return Goals
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Goals
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
     * @param \Nibynool\FitbitStorageBundle\Entity\GoalTypes $type
     * @return Goals
     */
    public function setType(\Nibynool\FitbitStorageBundle\Entity\GoalTypes $type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\GoalTypes 
     */
    public function getType()
    {
        return $this->Type;
    }
}
