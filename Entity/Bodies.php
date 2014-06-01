<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitbit_bodies", indexes={@ORM\Index(name="user_idx", columns={"user_id"})})
 */
class Bodies
{
    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $bicep;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $bmi;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $calf;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $chest;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $fat;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $forearm;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $hips;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $neck;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $thigh;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $waist;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $weight;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Bodies")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $User;

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Bodies
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
     * Set bicep
     *
     * @param string $bicep
     * @return Bodies
     */
    public function setBicep($bicep)
    {
        $this->bicep = $bicep;

        return $this;
    }

    /**
     * Get bicep
     *
     * @return string 
     */
    public function getBicep()
    {
        return $this->bicep;
    }

    /**
     * Set bmi
     *
     * @param string $bmi
     * @return Bodies
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;

        return $this;
    }

    /**
     * Get bmi
     *
     * @return string 
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Set calf
     *
     * @param string $calf
     * @return Bodies
     */
    public function setCalf($calf)
    {
        $this->calf = $calf;

        return $this;
    }

    /**
     * Get calf
     *
     * @return string 
     */
    public function getCalf()
    {
        return $this->calf;
    }

    /**
     * Set chest
     *
     * @param string $chest
     * @return Bodies
     */
    public function setChest($chest)
    {
        $this->chest = $chest;

        return $this;
    }

    /**
     * Get chest
     *
     * @return string 
     */
    public function getChest()
    {
        return $this->chest;
    }

    /**
     * Set fat
     *
     * @param string $fat
     * @return Bodies
     */
    public function setFat($fat)
    {
        $this->fat = $fat;

        return $this;
    }

    /**
     * Get fat
     *
     * @return string 
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * Set forearm
     *
     * @param string $forearm
     * @return Bodies
     */
    public function setForearm($forearm)
    {
        $this->forearm = $forearm;

        return $this;
    }

    /**
     * Get forearm
     *
     * @return string 
     */
    public function getForearm()
    {
        return $this->forearm;
    }

    /**
     * Set hips
     *
     * @param string $hips
     * @return Bodies
     */
    public function setHips($hips)
    {
        $this->hips = $hips;

        return $this;
    }

    /**
     * Get hips
     *
     * @return string 
     */
    public function getHips()
    {
        return $this->hips;
    }

    /**
     * Set neck
     *
     * @param string $neck
     * @return Bodies
     */
    public function setNeck($neck)
    {
        $this->neck = $neck;

        return $this;
    }

    /**
     * Get neck
     *
     * @return string 
     */
    public function getNeck()
    {
        return $this->neck;
    }

    /**
     * Set thigh
     *
     * @param string $thigh
     * @return Bodies
     */
    public function setThigh($thigh)
    {
        $this->thigh = $thigh;

        return $this;
    }

    /**
     * Get thigh
     *
     * @return string 
     */
    public function getThigh()
    {
        return $this->thigh;
    }

    /**
     * Set waist
     *
     * @param string $waist
     * @return Bodies
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;

        return $this;
    }

    /**
     * Get waist
     *
     * @return string 
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Bodies
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return Bodies
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
