<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role implements \Symfony\Component\Security\Core\Role\RoleInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="chucvu", type="string", length=45, nullable=true)
     */
    private $chucvu;

    /**
     * @var string
     *
     * @ORM\Column(name="trachnhiem", type="string", length=45, nullable=true)
     */
    private $trachnhiem;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\KLBundle\Entity\User", inversedBy="role")
     * @ORM\JoinTable(name="role_has_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Role_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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
     * Set trachnhiem
     *
     * @param string $trachnhiem
     * @return Role
     */
    public function setTrachnhiem($trachnhiem)
    {
        $this->trachnhiem = $trachnhiem;
    
        return $this;
    }

    /**
     * Get trachnhiem
     *
     * @return string 
     */
    public function getTrachnhiem()
    {
        return $this->trachnhiem;
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
     * Add user
     *
     * @param \Acme\KLBundle\Entity\User $user
     * @return Role
     */
    public function addUser(\Acme\KLBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \Acme\KLBundle\Entity\User $user
     */
    public function removeUser(\Acme\KLBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
    * @see RoleInterface
    */
    public function getRole()
    {
    return $this->role;
}
}