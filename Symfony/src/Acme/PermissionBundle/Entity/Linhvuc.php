<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linhvuc
 *
 * @ORM\Table(name="linhvuc")
 * @ORM\Entity
 */
class Linhvuc
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
    * @ORM\OneToMany(targetEntity="Quyenlinhvuc", mappedBy="linhvuc")
    */
    private $quyenlinhvuc;
    public function getQuyenlinhvuc(){
        return $this->quyenlinhvuc;
    }
    public function setQuyenlinhvuc($quyenlinhvucs){
        return $this->quyenlinhvuc = $quyenlinhvucs;
    }
    public function __construct()
    {
        $this->quyenlinhvuc = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Set name
     *
     * @param string $name
     * @return Linhvuc
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Linhvuc
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
