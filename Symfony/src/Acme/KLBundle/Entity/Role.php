<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var string
     *
     * @ORM\Column(name="chucvu", type="string", length=45, nullable=true)
     */
    private $chucvu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\KLBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set chucvu
     *
     * @param string $chucvu
     * @return Role
     */
    public function setChucvu($chucvu)
    {
        $this->chucvu = $chucvu;
    
        return $this;
    }

    /**
     * Get chucvu
     *
     * @return string 
     */
    public function getChucvu()
    {
        return $this->chucvu;
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
     * Set user
     *
     * @param \Acme\KLBundle\Entity\User $user
     * @return Role
     */
    public function setUser(\Acme\KLBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\KLBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}