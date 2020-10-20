<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\NotifiableInterface;


/**
 * listintervenant
 *
 * @ORM\Table(name="listintervenant")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\listintervenantRepository")
 */
class listintervenant
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
     * @ORM\ManyToOne(targetEntity="intervenant",inversedBy="listint")
     * @ORM\JoinColumn(name="listint_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $liste;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    function getListe() {
        return $this->liste;
    }

    function setListe($liste) {
        $this->liste = $liste;
    }


 
    }
