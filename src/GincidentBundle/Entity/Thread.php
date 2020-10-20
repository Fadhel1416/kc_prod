<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use FOS\MessageBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 */
class Thread extends BaseThread
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="usr")
     * @ORM\JoinColumn(name="use_id", referencedColumnName="id",onDelete="CASCADE")
     */
     protected $createdBy;
     /**
     * @ORM\OneToMany(targetEntity="Message",mappedBy="thread",cascade={"all"})
     * @var Message[]|Collection
     */
    protected $messages;
     /**
     * @ORM\OneToMany(targetEntity="ThreadMetadata",mappedBy="thread",cascade={"all"})
     * @var ThreadMetadata[]|Collection
     */
    protected $metadata;

    /**
     * Remove message.
     *
     * @param \GincidentBundle\Entity\Message $message
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMessage(\GincidentBundle\Entity\Message $message)
    {
        return $this->messages->removeElement($message);
    }

    /**
     * Add metadata.
     *
     * @param \GincidentBundle\Entity\ThreadMetadata $metadata
     *
     * @return Thread
     */
    public function addMetadatum(\GincidentBundle\Entity\ThreadMetadata $metadata)
    {
        $this->metadata[] = $metadata;

        return $this;
    }

    /**
     * Remove metadata.
     *
     * @param \GincidentBundle\Entity\ThreadMetadata $metadata
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMetadatum(\GincidentBundle\Entity\ThreadMetadata $metadata)
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
