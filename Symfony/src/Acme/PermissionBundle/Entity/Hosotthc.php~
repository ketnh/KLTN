<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hosotthc
 *
 * @ORM\Table(name="hosotthc", indexes={@ORM\Index(name="fk_HosoTTHC_TTHC1_idx", columns={"TTHC"}), @ORM\Index(name="fk_HosoTTHC_User1_idx", columns={"User"})})
 * @ORM\Entity
 */
class Hosotthc
{
    /**
     * @var string
     *
     * @ORM\Column(name="ngaynhanhs", type="string", length=45, nullable=false)
     */
    private $ngaynhanhs;

    /**
     * @var string
     *
     * @ORM\Column(name="ngayhentra", type="string", length=45, nullable=false)
     */
    private $ngayhentra;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\PermissionBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Acme\PermissionBundle\Entity\Tthc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Tthc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TTHC", referencedColumnName="id")
     * })
     */
    private $tthc;



    /**
     * Set ngaynhanhs
     *
     * @param string $ngaynhanhs
     * @return Hosotthc
     */
    public function setNgaynhanhs($ngaynhanhs)
    {
        $this->ngaynhanhs = $ngaynhanhs;

        return $this;
    }

    /**
     * Get ngaynhanhs
     *
     * @return string 
     */
    public function getNgaynhanhs()
    {
        return $this->ngaynhanhs;
    }

    /**
     * Set ngayhentra
     *
     * @param string $ngayhentra
     * @return Hosotthc
     */
    public function setNgayhentra($ngayhentra)
    {
        $this->ngayhentra = $ngayhentra;

        return $this;
    }

    /**
     * Get ngayhentra
     *
     * @return string 
     */
    public function getNgayhentra()
    {
        return $this->ngayhentra;
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
     * @param \Acme\PermissionBundle\Entity\User $user
     * @return Hosotthc
     */
    public function setUser(\Acme\PermissionBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\PermissionBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tthc
     *
     * @param \Acme\PermissionBundle\Entity\Tthc $tthc
     * @return Hosotthc
     */
    public function setTthc(\Acme\PermissionBundle\Entity\Tthc $tthc = null)
    {
        $this->tthc = $tthc;

        return $this;
    }

    /**
     * Get tthc
     *
     * @return \Acme\PermissionBundle\Entity\Tthc 
     */
    public function getTthc()
    {
        return $this->tthc;
    }
}
