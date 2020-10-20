<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * intervenant
 *
 * @ORM\Table(name="intervenant")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\intervenantRepository")
 */
class intervenant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
     /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @ORM\OneToMany(targetEntity="listintervenant", mappedBy="liste",cascade={"persist"})
     */
    private $listint;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    function getName() {
        return $this->name;
    }
                
    /**
     * Set name.
     *
     * @param string $name
     *
     * @return intervenant
     */    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function __toString() {
              return"$this->name";   

    }





    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listint = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listint.
     *
     * @param \GincidentBundle\Entity\listintervenant $listint
     *
     * @return intervenant
     */
    public function addListint(\GincidentBundle\Entity\listintervenant $listint)
    {
        $this->listint[] = $listint;

        return $this;
    }

    /**
     * Remove listint.
     *
     * @param \GincidentBundle\Entity\listintervenant $listint
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeListint(\GincidentBundle\Entity\listintervenant $listint)
    {
        return $this->listint->removeElement($listint);
    }

    /**
     * Get listint.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListint()
    {
        return $this->listint;
    }
}
