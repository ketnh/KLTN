<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Functions
 *
 * @ORM\Table(name="functions", indexes={@ORM\Index(name="fk_Function_GroupFunction1_idx", columns={"GroupFunction"})})
 * @ORM\Entity
 */
class Functions
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
     * @ORM\Column(name="path", type="string", length=45, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\PermissionBundle\Entity\Groupfunc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Groupfunc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GroupFunction", referencedColumnName="id")
     * })
     */
    private $groupfunction;



    /**
     * Set name
     *
     * @param string $name
     * @return Functions
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
     * Set path
     *
     * @param string $path
     * @return Functions
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
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

    /**
     * Set groupfunction
     *
     * @param \Acme\PermissionBundle\Entity\Groupfunc $groupfunction
     * @return Functions
     */
    public function setGroupfunction(\Acme\PermissionBundle\Entity\Groupfunc $groupfunction = null)
    {
        $this->groupfunction = $groupfunction;

        return $this;
    }

    /**
     * Get groupfunction
     *
     * @return \Acme\PermissionBundle\Entity\Groupfunc 
     */
    public function getGroupfunction()
    {
        return $this->groupfunction;
    }
}
