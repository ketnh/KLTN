<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quyenlinhvuc
 *
 * @ORM\Table(name="quyenlinhvuc", indexes={@ORM\Index(name="fk_QuyenLinhvuc_User1_idx", columns={"User"}), @ORM\Index(name="fk_QuyenLinhvuc_Linhvuc1_idx", columns={"Linhvuc"}), @ORM\Index(name="fk_QuyenLinhvuc_quyenhan1_idx", columns={"quyenhan"})})
 * @ORM\Entity
 */
class Quyenlinhvuc
{
    /**
     * @var string
     *
     * @ORM\Column(name="mota", type="string", length=45, nullable=true)
     */
    private $mota;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\PermissionBundle\Entity\Quyenhan
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Quyenhan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quyenhan", referencedColumnName="id")
     * })
     */
    private $quyenhan;

    /**
     * @var \Acme\PermissionBundle\Entity\Linhvuc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Linhvuc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Linhvuc", referencedColumnName="id")
     * })
     */
    private $linhvuc;

    /**
     * @var \Acme\PermissionBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\User",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set mota
     *
     * @param string $mota
     * @return Quyenlinhvuc
     */
    public function setMota($mota)
    {
        $this->mota = $mota;

        return $this;
    }

    /**
     * Get mota
     *
     * @return string 
     */
    public function getMota()
    {
        return $this->mota;
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
     * Set quyenhan
     *
     * @param \Acme\PermissionBundle\Entity\Quyenhan $quyenhan
     * @return Quyenlinhvuc
     */
    public function setQuyenhan(\Acme\PermissionBundle\Entity\Quyenhan $quyenhan = null)
    {
        $this->quyenhan = $quyenhan;

        return $this;
    }

    /**
     * Get quyenhan
     *
     * @return \Acme\PermissionBundle\Entity\Quyenhan 
     */
    public function getQuyenhan()
    {
        return $this->quyenhan;
    }

    /**
     * Set linhvuc
     *
     * @param \Acme\PermissionBundle\Entity\Linhvuc $linhvuc
     * @return Quyenlinhvuc
     */
    public function setLinhvuc(\Acme\PermissionBundle\Entity\Linhvuc $linhvuc = null)
    {
        $this->linhvuc = $linhvuc;

        return $this;
    }

    /**
     * Get linhvuc
     *
     * @return \Acme\PermissionBundle\Entity\Linhvuc 
     */
    public function getLinhvuc()
    {
        return $this->linhvuc;
    }

    /**
     * Set user
     *
     * @param \Acme\PermissionBundle\Entity\User $user
     * @return Quyenlinhvuc
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
}
