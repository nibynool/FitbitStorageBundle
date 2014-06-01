<?php
namespace Nibynool\FitbitStorageBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="fitbit_update_backlogs",
 *     indexes={@ORM\Index(name="user_idx", columns={"user_id"})},
 *     uniqueConstraints={@ORM\UniqueConstraint(name="log_idx", columns={"log_id"})}
 * )
 */
class UpdateBacklog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $end_point;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $start_date;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $end_date;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $update_timestamp;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\Users", inversedBy="Backlog")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="restrict")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Nibynool\FitbitStorageBundle\Entity\RequestLogs")
     * @ORM\JoinColumn(name="log_id", referencedColumnName="id", onDelete="restrict")
     */
    private $ResolvedBy;

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
     * Set end_point
     *
     * @param string $endPoint
     * @return UpdateBacklog
     */
    public function setEndPoint($endPoint)
    {
        $this->end_point = $endPoint;

        return $this;
    }

    /**
     * Get end_point
     *
     * @return string 
     */
    public function getEndPoint()
    {
        return $this->end_point;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return UpdateBacklog
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return UpdateBacklog
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set update_timestamp
     *
     * @param \DateTime $updateTimestamp
     * @return UpdateBacklog
     */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->update_timestamp = $updateTimestamp;

        return $this;
    }

    /**
     * Get update_timestamp
     *
     * @return \DateTime 
     */
    public function getUpdateTimestamp()
    {
        return $this->update_timestamp;
    }

    /**
     * Set User
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\Users $user
     * @return UpdateBacklog
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
     * Set ResolvedBy
     *
     * @param \Nibynool\FitbitStorageBundle\Entity\RequestLogs $resolvedBy
     * @return UpdateBacklog
     */
    public function setResolvedBy(\Nibynool\FitbitStorageBundle\Entity\RequestLogs $resolvedBy = null)
    {
        $this->ResolvedBy = $resolvedBy;

        return $this;
    }

    /**
     * Get ResolvedBy
     *
     * @return \Nibynool\FitbitStorageBundle\Entity\RequestLogs 
     */
    public function getResolvedBy()
    {
        return $this->ResolvedBy;
    }
}
