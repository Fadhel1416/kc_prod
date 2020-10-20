<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * calcul
 *
 * @ORM\Table(name="calcul")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\calculRepository")
 */
class calcul
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
     * @var float
     *
     * @ORM\Column(name="fraisport", type="float")
     */
	private $fraisport;
	/**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer")
     */
	private $tva;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
	public function getFraisport()
	{
	return $this->fraisport;
	
	}
	public function getTva()
	{
	return $this->tva;
	}
	public function setFraisport($frais)
	{
	$this->fraisport= $frais;
	
	}
	public function setTva($tva)
	{
	$this->tva= $tva;
	
	}
}
