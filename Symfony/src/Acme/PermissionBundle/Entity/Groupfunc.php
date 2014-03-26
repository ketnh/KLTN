<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupfunc
 *
 * @ORM\Table(name="groupfunc", indexes={@ORM\Index(name="fk_GroupFunc_Role1_idx", columns={"Role"})})
 * @ORM\Entity
 */
class Groupfunc
{
    /**
     * @var string
     *
     * @ORM\Column(name="nameGroup", type="string", length=45, nullable=false)
     */
    private $namegroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\PermissionBundle\Entity\Role
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Role", referencedColumnName="id")
     * })
     */
    private $role;



    /**
     * Set namegroup
     *
     * @param string $namegroup
     * @return Groupfunc
     */
    public function setNamegroup($namegroup)
    {
        $this->namegroup = $namegroup;

        return $this;
    }

    /**
     * Get namegroup
     *
     * @return string 
     */
    public function getNamegroup()
    {
        return $this->namegroup;
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
     * Set role
     *
     * @param \Acme\PermissionBundle\Entity\Role $role
     * @return Groupfunc
     */
    public function setRole(\Acme\PermissionBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Acme\PermissionBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
