<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="Article")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\ManyToOne(targetEntity="fournisseur", inversedBy="article")
     * @ORM\JoinColumn(name="frs_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $art_frs;
	/**
     * @var string
     *
     * @ORM\Column(name="choix_niveau", type="string", length=255)
     */
    public $niveau;
	/**
     * @var int
     *
     * @ORM\Column(name="idclient", type="integer", length=255)
     */
    public $idclient;
	/**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    public $famille;
	/**
     * @var string
     *
     * @ORM\Column(name="sous_famille", type="string", length=700)
     */
    public $sousfamille;
	/**
     * @var string
     *
     * @ORM\Column(name="brochureFile", type="string",length=300,nullable=true)
     */
    public $brochureFile;
	/**
     * @var string
     *
     * @ORM\Column(name="Fich_Tic", type="string", length=300,nullable=true)
     */
    public $Fich_Tic;
	
	/**
     * @var string
     *
     * @ORM\Column(name="decor", type="string", length=255)
     */
    public $decor;
	/**
     * @var string
     *
     * @ORM\Column(name="plaque", type="string", length=255)
     */
    public $plaque;
   /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    public $ref;
    
	/**
     * @ORM\Column(type="string",name="codefacture",nullable=true)
     */
    public $codefacture;

    public function getBrochureFile()
    {
        return $this->brochureFile;
    }
	 public function getCodeFacture()
    {
        return $this->codefacture;
    }
	 public function setCodeFacture($fact)
    {
        $this->codefacture = $fact;
    }

    
	/**
     * @var float
     *
     * @ORM\Column(name="prxuni", type="float")
     */
	private $prxuni;
	/**
     * @var float
     *
     * @ORM\Column(name="dim", type="float")
     */
	private $dim;
	/**
     * @var float
     *
     * @ORM\Column(name="totalprix", type="float")
     */
	private $totalprix;
	/**
     * @var float
     *
     * @ORM\Column(name="qte", type="float")
     */
	private $qte;
	function getQte() {
        return $this->qte;
    }
	function setQte($qt) {
      $this->qte=$qt;
    }
	function getPrxuni() {
        return $this->prxuni;
    }
	function getDim() {
        return $this->dim;
    }
	function getTotalprix(){
        return $this->totalprix;
    }
	function setDim($di) {
        $this->dim=$di;
    }
	function setPrxuni($pr) {
        $this->prxuni=$pr;
    }
	function setTotalprix($tp) {
        $this->totalprix=$tp;
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
    public function setFamille($fam)
    {
        $this->famille =$fam;

     
    }
	 public function setIdclient($idc)
    {
        $this->idclient =$idc;
    }
	 public function getIdclient()
    {
        return $this->idclient;
    }
	
	 public function setSousFamille($fam)
    {
        $this->sousfamille =$fam;
    }
	 public function getFamille()
    {
        return $this->famille; 
    }
		 public function getSousFamille()
    {
        return $this->sousfamille; 
    }
    
    public function setArtFrs($artFrs)
    {
        $this->art_frs =$artFrs;

     
    }
	 public function setRef($rf)
    {
        $this->ref =$rf;
    }
	 public function setNiveau($niv)
    {
        $this->niveau =$niv;
    }
	 public function setPlaque($pl)
    {
        $this->plaque =$pl;
    }
	 public function setDecor($decor)
    {
        $this->decor =$decor;

     
    }
		 public function getRef()
    {
        return $this->ref;
    }
	 public function getDecor()
    {
        return $this->decor;
    }
 public function getPlaque()
    {
        return $this->plaque;
    }
   public function getNiveau()
    {
        return $this->niveau;
    }
    public function getArtFrs()
    {
        return $this->art_frs;
    }
	
	public function getFich_Tic()
    {
        return $this->Fich_Tic;
    }
	public function setFich_Tic($brochureFilename)
    {
        $this->Fiche_Tic = $brochureFilename;

        
    }
	public function getFichTic()
    {
        return $this->Fich_Tic;
    }
	public function setFichTic($brochureFilename)
    {
        $this->Fiche_Tic = $brochureFilename;

        
    }

    public function setBrochureFile($brochureFilename)
    {
        $this->brochureFile = $brochureFilename;

        
    }
}
