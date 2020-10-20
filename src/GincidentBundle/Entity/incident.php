<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * incident
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\incidentRepository")
 */
class incident
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
     * @ORM\OneToMany(targetEntity="ticket", mappedBy="incidents")
     */
    protected $tickets;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
	 private $name;
	 
	/**
     * @var string
     *
     * @ORM\Column(name="nomfrs", type="string", length=255)
     */
	 private $nomfrs;
	 public function getNomfrs()
	 {
	 return $this->nomfrs;}
	 public function setNomfrs($nfrs)
	 {
	  $this->nomfrs =$nfrs;}

     	 
    /**
     * @ORM\ManyToOne(targetEntity="fournisseur", inversedBy="famille")
     * @ORM\JoinColumn(name="frs_id", referencedColumnName="id", onDelete="CASCADE")
	 * @ORM\OrderBy({"name" = "asc"})
     */
    protected $frs;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string",length=255)
     */
    private $description ;
   
    
        
    function getTickets() {
        return $this->tickets;
    }

    function getdescription() {
        return $this->description;
    }

    function setTickets($tickets) {
        $this->tickets = $tickets;
    }

    function setdescription($description) {
        $this->description = $description;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="createdby", type="string", length=255)
     */
    public $createdby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinc", type="datetime")
     */
    private $dateinc;
   public function getFrs()
    {
        return $this->frs;
    }
	public function setFrs($frs)
    {
      $this->frs =$frs;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return incident
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    function getDateinc(): \DateTime {
        return $this->dateinc;
    }

        function getCreatedby() {
        return $this->createdby;
    }
    function setCreatedby($createdby) {
        $this->createdby = $createdby;
    }


    function setDateinc(\DateTime $dateinc) {
        $this->dateinc = $dateinc;
    }

    
    
    public function __toString() {
      return"$this->name";   
    }

    
    
    
    
    
    
    
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ticket.
     *
     * @param \GincidentBundle\Entity\ticket $ticket
     *
     * @return incident
     */
    public function addTicket(\GincidentBundle\Entity\ticket $ticket)
    {
        $this->tickets[] = $ticket;

        return $this;
    }

    /**
     * Remove ticket.
     *
     * @param \GincidentBundle\Entity\ticket $ticket
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTicket(\GincidentBundle\Entity\ticket $ticket)
    {
        return $this->tickets->removeElement($ticket);
    }

    
}
