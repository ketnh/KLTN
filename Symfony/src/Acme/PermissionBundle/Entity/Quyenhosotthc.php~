<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quyenhosotthc
 *
 * @ORM\Table(name="quyenhosotthc", indexes={@ORM\Index(name="fk_QuyenHosoTTHC_User1_idx", columns={"User"}), @ORM\Index(name="fk_QuyenHosoTTHC_HosoTTHC1_idx", columns={"HosoTTHC"}), @ORM\Index(name="fk_QuyenHosoTTHC_quyenhan1_idx", columns={"quyenhan"})})
 * @ORM\Entity
 */
class Quyenhosotthc
{
    /**
     * @var string
     *
     * @ORM\Column(name="quyen", type="string", length=45, nullable=false)
     */
    private $quyen;

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
     * @var \Acme\PermissionBundle\Entity\Hosotthc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Hosotthc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HosoTTHC", referencedColumnName="id")
     * })
     */
    private $hosotthc;

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
     * Set quyen
     *
     * @param string $quyen
     * @return Quyenhosotthc
     */
    public function setQuyen($quyen)
    {
        $this->quyen = $quyen;

        return $this;
    }

    /**
     * Get quyen
     *
     * @return string 
     */
    public function getQuyen()
    {
        return $this->quyen;
    }

    /**
     * Set mota
     *
     * @param string $mota
     * @return Quyenhosotthc
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
     * @return Quyenhosotthc
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
     * Set hosotthc
     *
     * @param \Acme\PermissionBundle\Entity\Hosotthc $hosotthc
     * @return Quyenhosotthc
     */
    public function setHosotthc(\Acme\PermissionBundle\Entity\Hosotthc $hosotthc = null)
    {
        $this->hosotthc = $hosotthc;

        return $this;
    }

    /**
     * Get hosotthc
     *
     * @return \Acme\PermissionBundle\Entity\Hosotthc 
     */
    public function getHosotthc()
    {
        return $this->hosotthc;
    }

    /**
     * Set user
     *
     * @param \Acme\PermissionBundle\Entity\User $user
     * @return Quyenhosotthc
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
