<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\MessageMetadata as BaseMessageMetadata;

/**
 * @ORM\Entity
 */
class MessageMetadata extends BaseMessageMetadata
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\ManyToOne(targetEntity="Message",inversedBy="metadata")
     * @ORM\JoinColumn(name="mess_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $message;
     /**
     * @ORM\ManyToOne(targetEntity="GincidentBundle\Entity\User",inversedBy="mesmeta")
     * @ORM\JoinColumn(name="mesmeta_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $participant;
}
