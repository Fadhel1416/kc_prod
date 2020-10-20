<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Mgilet\NotificationBundle\NotifiableInterface;

use FOS\UserBundle\Model\User;


/**
 * ticket
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\ticketRepository")
 */
class ticket
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
     * @ORM\ManyToOne(targetEntity="incident", inversedBy="tickets")
     * @ORM\JoinColumn(name="inc_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $incidents;
    /**
     * @ORM\OneToMany(targetEntity="solutions", mappedBy="tic",cascade={"persist"})
     */
    protected $sol;
	
	/**
     * @var float
     *
     * @ORM\Column(name="prixuni", type="float")
     */
	private $prixuni;
	

    function getSol() {
        return $this->sol;
    }

    function setSol($sol) {
        $this->sol = $sol;
    }
	function getPrixuni() {
        return $this->prixuni;
    }

    function setPrixuni($prix) {
        $this->prixuni = $prix;
    }

     /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
     private $name;
	/**
     * @ORM\Column(type="string",name="brochureFilename",nullable=true)
     */
    protected $brochureFilename;
	/**
     * @ORM\Column(type="string",name="Fiche_Tic",nullable=true)
     */
    protected $Fiche_Tic;

    public function getBrochureFilename()
    {
        return $this->brochureFilename;
    }
	public function getFiche_Tic()
    {
        return $this->Fiche_Tic;
    }
	public function setFiche_Tic($brochureFilename)
    {
        $this->Fiche_Tic = $brochureFilename;

        
    }
public function getFicheTic()
    {
        return $this->Fiche_Tic;
    }
	public function setFicheTic($brochureFilename)
    {
        $this->Fiche_Tic = $brochureFilename;

        
    }
    public function setBrochureFilename($brochureFilename)
    {
        $this->brochureFilename = $brochureFilename;

       
    }

     
     
     /**
     * @var GincidentBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="GincidentBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ok", referencedColumnName="id")
     * })
     */
    public $ok;
    

      
    
    function getIntervenante() {
        return $this->intervenante;
    }

    function setIntervenante($intervenante) {
        $this->intervenante = $intervenante;
    }

        
     /**
     * @var string
     *
     * @ORM\Column(name="intervenant", type="string", length=255)
     */
    public $intervenante;
    
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    public $etat;
    
    
    
    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
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
     * @ORM\Column(name="createdat", type="datetime")
     */

    private $createdat;
    
    function getIncidents() {
        return $this->incidents;
    }

    function setIncidents($incidents) {
        $this->incidents = $incidents;
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true )
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string",length=255, nullable=true)
     */
    private $reference ;
    
    
    
  
    function getReference() {
        return $this->reference;
    }
  
    function setReference($reference) {
        $this->reference = $reference;
    }

    
              
               
              
    /**
     * Set name.
     *
     * @param string $name
     *
     * @return ticket
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

   
    
    function getCreatedby() {
        return $this->createdby;
    }

    function setCreatedby($createdby) {
        $this->createdby = $createdby;
    }

    function getCreatedat(): \DateTime {
        return $this->createdat;
    }

    function setCreatedat(\DateTime $createdat) {
        $this->createdat = $createdat;
    }



     function getDescription() {
         return $this->description;
     }

     function setDescription($description) {
         $this->description = $description;
     }
     
    

     function setId($id) {
         $this->id = $id;
     }

          
    
    
    public function __toString() {
      return"$this->name";   
    }
     
     
     
     
     
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sol = new \Doctrine\Common\Collections\ArrayCollection();
    }

   

    /**
     * Add sol.
     *
     * @param \GincidentBundle\Entity\solutions $sol
     *
     * @return ticket
     */
    public function addSol(\GincidentBundle\Entity\solutions $sol)
    {
        $this->sol[] = $sol;

        return $this;
    }

    /**
     * Remove sol.
     *
     * @param \GincidentBundle\Entity\solutions $sol
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSol(\GincidentBundle\Entity\solutions $sol)
    {
        return $this->sol->removeElement($sol);
    }

    /**
     * Set ok.
     *
     * @param \GincidentBundle\Entity\User|null $ok
     *
     * @return ticket
     */
    public function setOk(\GincidentBundle\Entity\User $ok = null)
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * Get ok.
     *
     * @return \GincidentBundle\Entity\User|null
     */
    public function getOk()
    {
        return $this->ok;
    }
}
