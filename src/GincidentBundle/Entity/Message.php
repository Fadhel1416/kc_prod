<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use FOS\MessageBundle\Entity\Message as BaseMessage;

/**
 * @ORM\Entity
 */
class Message extends BaseMessage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\ManyToOne(targetEntity="Thread",inversedBy="messages")
     * @ORM\JoinColumn(name="threads_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $thread;
     /**
     * @ORM\ManyToOne(targetEntity="User",inversedBy="mes")
     * @ORM\JoinColumn(name="mes_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $sender;
     /**
     * @ORM\OneToMany(targetEntity="MessageMetadata",mappedBy="message",cascade={"all"})
     * @var MessageMetadata[]|Collection
     */
    protected $metadata;

    /**
     * Add metadata.
     *
     * @param \GincidentBundle\Entity\MessageMetadata $metadata
     *
     * @return Message
     */
    public function addMetadatum(\GincidentBundle\Entity\MessageMetadata $metadata)
    {
        $this->metadata[] = $metadata;

        return $this;
    }

    /**
     * Remove metadata.
     *
     * @param \GincidentBundle\Entity\MessageMetadata $metadata
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMetadatum(\GincidentBundle\Entity\MessageMetadata $metadata)
    {
        return $this->metadata->removeElement($metadata);
    }

    /**
     * Get metadata.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
