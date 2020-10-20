<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\fournisseurRepository")
 */
class fournisseur
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
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
     private $reference;
	 /**
     * @var string
     *
     * @ORM\Column(name="codetva", type="string", length=255)
     */
     private $codetva;
	 /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime",nullable=true)
     */
     private $created_at;
	 /**
     * @var string
     *
     * @ORM\Column(name="dircom_adr1", type="string", length=255,nullable=true)
     */
     private $dircom_adr1;
	 /**
     * @var string
     *
     * @ORM\Column(name="dircom_adr2", type="string", length=255,nullable=true)
     */
     private $dircom_adr2;
	 /**
     * @var string
     *
     * @ORM\Column(name="dircom_telfixe", type="string", length=255,nullable=true)
     */
     private $dircom_telfixe;
	 /**
     * @var string
     *
     * @ORM\Column(name="dircom_telmobile", type="string", length=255,nullable=true)
     */
     private $dircom_telmobile;
	 /**
     * @var string
     *
     * @ORM\Column(name="dircom_nomrue", type="string", length=255,nullable=true)
     */
     private $dircom_nomrue;
	 /**
     * @var string
     *
     * @ORM\Column(name="dircom_numrue", type="string", length=255,nullable=true)
     */
     private $dircom_numrue;
	  /**
     * @var string
     *
     * @ORM\Column(name="dirzone_adr1", type="string", length=255,nullable=true)
     */
     private $dirzone_adr1;
	 /**
     * @var string
     *
     * @ORM\Column(name="dirzone_adr2", type="string", length=255,nullable=true)
     */
     private $dirzone_adr2;
	 /**
     * @var string
     *
     * @ORM\Column(name="dirzone_telfixe", type="string", length=255,nullable=true)
     */
     private $dirzone_telfixe;
	 /**
     * @var string
     *
     * @ORM\Column(name="dirzone_telmobile", type="string", length=255,nullable=true)
     */
     private $dirzone_telmobile;
	 /**
     * @var string
     *
     * @ORM\Column(name="dirzone_nomrue", type="string", length=255,nullable=true)
     */
     private $dirzone_nomrue;
	 /**
     * @var string
     *
     * @ORM\Column(name="dirzone_numrue", type="string", length=255,nullable=true)
     */
     private $dirzone_numrue;

	 /**
     * @ORM\OneToMany(targetEntity="incident", mappedBy="frs")
     */
    protected $famille;
	/**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="art_frs")
     */
    protected $article;
	  /**
     * @var string
     *
     * @ORM\Column(name="agentcom1_adr1", type="string", length=255,nullable=true)
     */
     private $agentcom1_adr1;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom1_adr2", type="string", length=255,nullable=true)
     */
     private $agentcom1_adr2;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom1_telfixe", type="string", length=255,nullable=true)
     */
     private $agentcom1_telfixe;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom1_telmobile", type="string", length=255,nullable=true)
     */
     private $agentcom1_telmobile;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom1_nomrue", type="string", length=255,nullable=true)
     */
     private $agentcom1_nomrue;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom1_numrue", type="string", length=255,nullable=true)
     */
     private $agentcom1_numrue;
	  /**
     * @var string
     *
     * @ORM\Column(name="agentcom2_adr1", type="string", length=255,nullable=true)
     */
     private $agentcom2_adr1;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom2_adr2", type="string", length=255,nullable=true)
     */
     private $agentcom2_adr2;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom2_telfixe", type="string", length=255,nullable=true)
     */
     private $agentcom2_telfixe;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom2_telmobile", type="string", length=255,nullable=true)
     */
     private $agentcom2_telmobile;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom2_nomrue", type="string", length=255,nullable=true)
     */
     private $agentcom2_nomrue;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom2_numrue", type="string", length=255,nullable=true)
     */
     private $agentcom2_numrue;
	   /**
     * @var string
     *
     * @ORM\Column(name="agentcom3_adr1", type="string", length=255,nullable=true)
     */
     private $agentcom3_adr1;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom3_adr2", type="string", length=255,nullable=true)
     */
     private $agentcom3_adr2;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom3_telfixe", type="string", length=255,nullable=true)
     */
     private $agentcom3_telfixe;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom3_telmobile", type="string", length=255,nullable=true)
     */
     private $agentcom3_telmobile;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom3_nomrue", type="string", length=255,nullable=true)
     */
     private $agentcom3_nomrue;
	 /**
     * @var string
     *
     * @ORM\Column(name="agentcom3_numrue", type="string", length=255,nullable=true)
     */
     private $agentcom3_numrue;



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
     * @return fournisseur
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

	public function getArticle()
    {
 
        return $this->article;
    }
	public function setArticle($article)
    {
        $this->article = $article;

       
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
public function getDircomAdr1()
    {
        return $this->dircom_adr1;
    }
	public function getDircom_Adr1()
    {
        return $this->dircom_adr1;
    }
	public function getDircom_Adr2()
    {
        return $this->dircom_adr2;
    }
	public function getDircomAdr2()
    {
        return $this->dircom_adr2;
    }
	public function getDircomTelfixe()
    {
        return $this->dircom_telfixe;
    }
	public function getDircom_Telfixe()
    {
        return $this->dircom_telfixe;
    }
	public function getDircomTelmobile()
    {
        return $this->dircom_telmobile;
    }
	public function getDircom_TelMobile()
    {
        return $this->dircom_telmobile;
    }
	public function getDircomNomrue()
    {
        return $this->dircom_nomrue;
    }
	public function getDircom_Nomrue()
    {
        return $this->dircom_nomrue;
    }
	public function getDircom_Numrue()
    {
        return $this->dircom_numrue;
    }
	public function getDircomNumrue()
    {
        return $this->dircom_numrue;
    }
	public function setDircomAdr1($adr)
    {
       $this->dircom_adr1=$adr;
    }
	public function setDircomAdr2($adr)
    {
       $this->dircom_adr2=$adr;
    }
	public function setDircomTelfixe($tel)
    {
       $this->dircom_telfixe=$tel;
    }
	public function setDircomTelmobile($tel)
    {
       $this->dircom_telmobile=$tel;
    }
	public function setDircomNomrue($nom)
    {
       $this->dircom_nomrue=$nom;
    }
	public function setDircomNumrue($num)
    {
       $this->dircom_numrue=$num;
    }
	public function getDirzoneAdr1()
    {
        return $this->dirzone_adr1;
    }
public function getDirzone_Adr1()
    {
        return $this->dirzone_adr1;
    }
	public function getDirzoneAdr2()
    {
        return $this->dirzone_adr2;
    }
	public function getDirzone_Adr2()
    {
        return $this->dirzone_adr2;
    }
	public function getDirzoneTelfixe()
    {
        return $this->dirzone_telfixe;
    }
	public function getDirzone_Telfixe()
    {
        return $this->dirzone_telfixe;
    }
	public function getDirzoneTelmobile()
    {
        return $this->dirzone_telmobile;
    }
	public function getDirzone_Telmobile()
    {
        return $this->dirzone_telmobile;
    }
	public function getDirzoneNomrue()
    {
        return $this->dirzone_nomrue;
    }
	public function getDirzone_Nomrue()
    {
        return $this->dirzone_nomrue;
    }
	public function getDirzoneNumrue()
    {
        return $this->dirzone_numrue;
    }
	public function getDirzone_Numrue()
    {
        return $this->dirzone_numrue;
    }
	public function setDirzoneAdr1($adr)
    {
       $this->dirzone_adr1=$adr;
    }
	public function setDirzoneAdr2($adr)
    {
       $this->dirzone_adr2=$adr;
    }
	public function setDirzoneTelfixe($tel)
    {
       $this->dirzone_telfixe=$tel;
    }
	public function setDirzoneTelmobile($tel)
    {
       $this->dirzone_telmobile=$tel;
    }
	public function setDirzoneNomrue($nom)
    {
       $this->dirzone_nomrue=$nom;
    }
	public function setDirzoneNumrue($num)
    {
       $this->dirzone_numrue=$num;
    }

	public function getFamille()
    {
        return $this->famille;
    }
	public function setFamille($famille)
    {
      $this->famille=$famille;
    }
	public function getAgentcom1Adr1()
    {
        return $this->agentcom1_adr1;
    }
	public function getAgentcom1_Adr1()
    {
        return $this->agentcom1_adr1;
    }
	public function getAgentcom1Adr2()
    {
        return $this->agentcom1_adr2;
    }
	public function getAgentcom1_Adr2()
    {
        return $this->agentcom1_adr2;
    }
	public function getAgentcom1Telfixe()
    {
        return $this->agentcom1_telfixe;
    }
	public function getAgentcom1_Telfixe()
    {
        return $this->agentcom1_telfixe;
    }
	public function getAgentcom1Telmobile()
    {
        return $this->agentcom1_telmobile;
    }
	public function getAgentcom1_Telmobile()
    {
        return $this->agentcom1_telmobile;
    }
	public function getAgentcom1Nomrue()
    {
        return $this->agentcom1_nomrue;
    }
	public function getAgentcom1_Nomrue()
    {
        return $this->agentcom1_nomrue;
    }
	public function getAgentcom1Numrue()
    {
        return $this->agentcom1_numrue;
    }
	public function getAgentcom1_Numrue()
    {
        return $this->agentcom1_numrue;
    }
	public function setAgentcom1Adr1($adr)
    {
       $this->agentcom1_adr1=$adr;
    }
	public function setAgentcom1Adr2($adr)
    {
       $this->agentcom1_adr2=$adr;
    }
	public function setAgentcom1Telfixe($tel)
    {
       $this->agentcom1_telfixe=$tel;
    }
	public function setAgentcom1Telmobile($tel)
    {
       $this->agentcom1_telmobile=$tel;
    }
	public function setAgentcom1Nomrue($nom)
    {
       $this->agentcom1_nomrue=$nom;
    }
	public function setAgentcom1Numrue($num)
    {
       $this->agentcom1_numrue=$num;
    }
	public function __toString() {
      return"$this->name";   
    }
	public function getAgentcom2Adr1()
    {
        return $this->agentcom2_adr1;
    }
	public function getAgentcom2_Adr1()
    {
        return $this->agentcom2_adr1;
    }
	public function getAgentcom2Adr2()
    {
        return $this->agentcom2_adr2;
    }
	public function getAgentcom2_Adr2()
    {
        return $this->agentcom2_adr2;
    }
	public function getAgentcom2Telfixe()
    {
        return $this->agentcom2_telfixe;
    }
	public function getAgentcom2_Telfixe()
    {
        return $this->agentcom2_telfixe;
    }
	public function getAgentcom2Telmobile()
    {
        return $this->agentcom2_telmobile;
    }
	public function getAgentcom2_Telmobile()
    {
        return $this->agentcom2_telmobile;
    }
	public function getAgentcom2Nomrue()
    {
        return $this->agentcom2_nomrue;
    }
		public function getAgentcom2_Nomrue()
    {
        return $this->agentcom2_nomrue;
    }
	public function getAgentcom2Numrue()
    {
        return $this->agentcom2_numrue;
    }
	public function getAgentcom2_Numrue()
    {
        return $this->agentcom2_numrue;
    }
	public function setAgentcom2Adr1($adr)
    {
       $this->agentcom2_adr1=$adr;
    }
	public function setAgentcom2Adr2($adr)
    {
       $this->agentcom2_adr2=$adr;
    }
	public function setAgentcom2Telfixe($tel)
    {
       $this->agentcom2_telfixe=$tel;
    }
	public function setAgentcom2Telmobile($tel)
    {
       $this->agentcom2_telmobile=$tel;
    }
	public function setAgentcom2Nomrue($nom)
    {
       $this->agentcom2_nomrue=$nom;
    }
	public function setAgentcom2Numrue($num)
    {
       $this->agentcom2_numrue=$num;
    }
	public function getAgentcom3Adr1()
    {
        return $this->agentcom3_adr1;
    }
	public function getAgentcom3_Adr1()
    {
        return $this->agentcom3_adr1;
    }
	public function getAgentcom3Adr2()
    {
        return $this->agentcom3_adr2;
    }
	public function getAgentcom3_Adr2()
    {
        return $this->agentcom3_adr2;
    }
	public function getAgentcom3Telfixe()
    {
        return $this->agentcom3_telfixe;
    }
	public function getAgentcom3_Telfixe()
    {
        return $this->agentcom3_telfixe;
    }
	public function getAgentcom3_Telmobile()
    {
        return $this->agentcom3_telmobile;
    }
	public function getAgentcom3Telmobile()
    {
        return $this->agentcom3_telmobile;
    }
	public function getAgentcom3Nomrue()
    {
        return $this->agentcom3_nomrue;
    }
	public function getAgentcom3_Nomrue()
    {
        return $this->agentcom3_nomrue;
    }
	public function getAgentcom3Numrue()
    {
        return $this->agentcom3_numrue;
    }
	public function getAgentcom3_Numrue()
    {
        return $this->agentcom3_numrue;
    }
	public function setAgentcom3Adr1($adr)
    {
       $this->agentcom3_adr1=$adr;
    }
	public function setAgentcom3Adr2($adr)
    {
       $this->agentcom3_adr2=$adr;
    }
	public function setAgentcom3Telfixe($tel)
    {
       $this->agentcom3_telfixe=$tel;
    }
	public function setAgentcom3Telmobile($tel)
    {
       $this->agentcom3_telmobile=$tel;
    }
	public function setAgentcom3Nomrue($nom)
    {
       $this->agentcom3_nomrue=$nom;
    }
	public function setAgentcom3Numrue($num)
    {
       $this->agentcom3_numrue=$num;
    }
	public function getReference()
    {
        return $this->reference;
    }
	public function getCodetva()
    {
        return $this->codetva;
    }
	public function setReference($ref)
    {
       $this->reference=$ref;
    }
	public function setCodetva($codetva)
    {
       $this->codetva=$codetva;
    }
	public function setCreatedAT($dt)
    {
       $this->created_at=$dt;
    }
	function getCreatedAt() {
        return $this->created_at;
    }
	function getCreated_At() {
        return $this->created_at;
    }
}
