<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\KLBundle\Entity\Thontincanhan
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Thontincanhan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Thontincanhan_id", referencedColumnName="id")
     * })
     */
    private $thontincanhan;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\KLBundle\Entity\Role", mappedBy="user")
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     * @return User
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;
    
        return $this;
    }

    /**
     * Get isactive
     *
     * @return boolean 
     */
    public function getIsactive()
    {
        return $this->isactive;
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
     * Set thontincanhan
     *
     * @param \Acme\KLBundle\Entity\Thontincanhan $thontincanhan
     * @return User
     */
    public function setThontincanhan(\Acme\KLBundle\Entity\Thontincanhan $thontincanhan = null)
    {
        $this->thontincanhan = $thontincanhan;
    
        return $this;
    }

    /**
     * Get thontincanhan
     *
     * @return \Acme\KLBundle\Entity\Thontincanhan 
     */
    public function getThontincanhan()
    {
        return $this->thontincanhan;
    }

    /**
     * Add role
     *
     * @param \Acme\KLBundle\Entity\Role $role
     * @return User
     */
    public function addRole(\Acme\KLBundle\Entity\Role $role)
    {
        $this->role[] = $role;
    
        return $this;
    }

    /**
     * Remove role
     *
     * @param \Acme\KLBundle\Entity\Role $role
     */
    public function removeRole(\Acme\KLBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }
    public function getRoles()
    {
        return $this->role->toArray();
    }
    /**
    * @inheritDoc
    */
    public function getSalt()
    {
    // you *may* need a real salt depending on your encoder
    // see section on salt below
    return null;
    }
    /**
    * @inheritDoc
    */
    public function eraseCredentials()
    {
    }
    /**
    * @see \Serializable::serialize()
    */
    public function serialize()
    {
    return serialize(array(
    $this->id,
    $this->username,
    $this->password,
    // see section on salt below
    // $this->salt,
    ));
    }
    /**
    * @see \Serializable::unserialize()
    */
    public function unserialize($serialized)
    {
    list (
        $this->id,
        $this->username,$this->password,
        // see section on salt below
        // $this->salt
        ) = unserialize($serialized);
    }
 
}