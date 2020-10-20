<?php

namespace GincidentBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;
use FOS\MessageBundle\Model\ParticipantInterface;



/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @Notifiable(name="fos_user")
*/
class User extends BaseUser implements NotifiableInterface,ParticipantInterface {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\OneToMany(targetEntity="Thread", mappedBy="createdBy",cascade={"persist"})
     */
    private $usr;
    /**
     * @ORM\OneToMany(targetEntity="ThreadMetadata", mappedBy="participant",cascade={"persist"})
     */
    private $thmeta;
     /**
     * @ORM\OneToMany(targetEntity="MessageMetadata", mappedBy="participant",cascade={"persist"})
     */
    private $mesmeta;
     /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="sender",cascade={"persist"})
     */
    private $mes;



  

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
 
     
  

    /**
     * Add usr.
     *
     * @param \GincidentBundle\Entity\Thread $usr
     *
     * @return User
     */
    public function addUsr(\GincidentBundle\Entity\Thread $usr)
    {
        $this->usr[] = $usr;

        return $this;
    }

    /**
     * Remove usr.
     *
     * @param \GincidentBundle\Entity\Thread $usr
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUsr(\GincidentBundle\Entity\Thread $usr)
    {
        return $this->usr->removeElement($usr);
    }

    /**
     * Get usr.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsr()
    {
        return $this->usr;
    }

    /**
     * Add thmetum.
     *
     * @param \GincidentBundle\Entity\ThreadMetadata $thmetum
     *
     * @return User
     */
    public function addThmetum(\GincidentBundle\Entity\ThreadMetadata $thmetum)
    {
        $this->thmeta[] = $thmetum;

        return $this;
    }

    /**
     * Remove thmetum.
     *
     * @param \GincidentBundle\Entity\ThreadMetadata $thmetum
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeThmetum(\GincidentBundle\Entity\ThreadMetadata $thmetum)
    {
        return $this->thmeta->removeElement($thmetum);
    }

    /**
     * Get thmeta.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getThmeta()
    {
        return $this->thmeta;
    }

    /**
     * Add mesmetum.
     *
     * @param \GincidentBundle\Entity\MessageMetadata $mesmetum
     *
     * @return User
     */
    public function addMesmetum(\GincidentBundle\Entity\MessageMetadata $mesmetum)
    {
        $this->mesmeta[] = $mesmetum;

        return $this;
    }

    /**
     * Remove mesmetum.
     *
     * @param \GincidentBundle\Entity\MessageMetadata $mesmetum
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMesmetum(\GincidentBundle\Entity\MessageMetadata $mesmetum)
    {
        return $this->mesmeta->removeElement($mesmetum);
    }

    /**
     * Get mesmeta.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMesmeta()
    {
        return $this->mesmeta;
    }

    /**
     * Add me.
     *
     * @param \GincidentBundle\Entity\Message $me
     *
     * @return User
     */
    public function addMe(\GincidentBundle\Entity\Message $me)
    {
        $this->mes[] = $me;

        return $this;
    }

    /**
     * Remove me.
     *
     * @param \GincidentBundle\Entity\Message $me
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMe(\GincidentBundle\Entity\Message $me)
    {
        return $this->mes->removeElement($me);
    }

    /**
     * Get mes.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMes()
    {
        return $this->mes;
    }
}
