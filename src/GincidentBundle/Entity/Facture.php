<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\FactureRepository")
 */
class Facture
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
     * @var int
     *
     * @ORM\Column(name="Num_facture", type="integer", length=255)
     */
    public $Num_facture;
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    public $date_creation;
	/**
     * @var int
     *
     * @ORM\Column(name="codeClient", type="integer", length=255)
     */
    public $codeclient;
	


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
	
	 public function setNum_Facture($f)
    {
        $this->Num_facture =$f;
    }
	 public function getNum_Facture()
    {
        return $this->Num_facture; 
    }
	public function setDateCreation($f)
    {
        $this->date_creation =$f;
    }
	 public function getDateCreation()
    {
        return $this->date_creation; 
    }
	public function setCodeClient($f)
    {
        $this->codeclient =$f;
    }
	 public function getCodeClient()
    {
        return $this->codeclient; 
    }
}
