<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hosotthc
 *
 * @ORM\Table(name="hosotthc")
 * @ORM\Entity
 */
class Hosotthc
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgayNhan", type="date", nullable=false)
     */
    private $ngaynhan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgayHenTra", type="date", nullable=false)
     */
    private $ngayhentra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsSentDVTL", type="boolean", nullable=true)
     */
    private $issentdvtl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsRecieveDVTL", type="boolean", nullable=true)
     */
    private $isrecievedvtl;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHoSoTTHC", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhosotthc;

    /**
     * @var \Acme\KLBundle\Entity\Tthc
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Tthc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTTHC", referencedColumnName="idTTHC")
     * })
     */
    private $idtthc;

    /**
     * @var \Acme\KLBundle\Entity\Tinhtrangthuly
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Tinhtrangthuly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTinhTrangThuLy", referencedColumnName="idTinhTrangThuLy")
     * })
     */
    private $idtinhtrangthuly;

    /**
     * @var \Acme\KLBundle\Entity\Donvithuly
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Donvithuly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDonViThuLy", referencedColumnName="idDonViThuLy")
     * })
     */
    private $iddonvithuly;

    /**
     * @var \Acme\KLBundle\Entity\Dinhkemnhanhs
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Dinhkemnhanhs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDinhKemNhan", referencedColumnName="idDinhKemNhanHS")
     * })
     */
    private $iddinhkemnhan;

    /**
     * @var \Acme\KLBundle\Entity\Dinhkemguihs
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Dinhkemguihs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDinhKemGui", referencedColumnName="idDinhKemGuiHS")
     * })
     */
    private $iddinhkemgui;

    /**
     * @var \Acme\KLBundle\Entity\Congdan
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Congdan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCongDan", referencedColumnName="idCongDan")
     * })
     */
    private $idcongdan;



    /**
     * Set ngaynhan
     *
     * @param \DateTime $ngaynhan
     * @return Hosotthc
     */
    public function setNgaynhan($ngaynhan)
    {
        $this->ngaynhan = $ngaynhan;
    
        return $this;
    }

    /**
     * Get ngaynhan
     *
     * @return \DateTime 
     */
    public function getNgaynhan()
    {
        return $this->ngaynhan;
    }

    /**
     * Set ngayhentra
     *
     * @param \DateTime $ngayhentra
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
     * @return \DateTime 
     */
    public function getNgayhentra()
    {
        return $this->ngayhentra;
    }

    /**
     * Set issentdvtl
     *
     * @param boolean $issentdvtl
     * @return Hosotthc
     */
    public function setIssentdvtl($issentdvtl)
    {
        $this->issentdvtl = $issentdvtl;
    
        return $this;
    }

    /**
     * Get issentdvtl
     *
     * @return boolean 
     */
    public function getIssentdvtl()
    {
        return $this->issentdvtl;
    }

    /**
     * Set isrecievedvtl
     *
     * @param boolean $isrecievedvtl
     * @return Hosotthc
     */
    public function setIsrecievedvtl($isrecievedvtl)
    {
        $this->isrecievedvtl = $isrecievedvtl;
    
        return $this;
    }

    /**
     * Get isrecievedvtl
     *
     * @return boolean 
     */
    public function getIsrecievedvtl()
    {
        return $this->isrecievedvtl;
    }

    /**
     * Get idhosotthc
     *
     * @return integer 
     */
    public function getIdhosotthc()
    {
        return $this->idhosotthc;
    }

    /**
     * Set idtthc
     *
     * @param \Acme\KLBundle\Entity\Tthc $idtthc
     * @return Hosotthc
     */
    public function setIdtthc(\Acme\KLBundle\Entity\Tthc $idtthc = null)
    {
        $this->idtthc = $idtthc;
    
        return $this;
    }

    /**
     * Get idtthc
     *
     * @return \Acme\KLBundle\Entity\Tthc 
     */
    public function getIdtthc()
    {
        return $this->idtthc;
    }

    /**
     * Set idtinhtrangthuly
     *
     * @param \Acme\KLBundle\Entity\Tinhtrangthuly $idtinhtrangthuly
     * @return Hosotthc
     */
    public function setIdtinhtrangthuly(\Acme\KLBundle\Entity\Tinhtrangthuly $idtinhtrangthuly = null)
    {
        $this->idtinhtrangthuly = $idtinhtrangthuly;
    
        return $this;
    }

    /**
     * Get idtinhtrangthuly
     *
     * @return \Acme\KLBundle\Entity\Tinhtrangthuly 
     */
    public function getIdtinhtrangthuly()
    {
        return $this->idtinhtrangthuly;
    }

    /**
     * Set iddonvithuly
     *
     * @param \Acme\KLBundle\Entity\Donvithuly $iddonvithuly
     * @return Hosotthc
     */
    public function setIddonvithuly(\Acme\KLBundle\Entity\Donvithuly $iddonvithuly = null)
    {
        $this->iddonvithuly = $iddonvithuly;
    
        return $this;
    }

    /**
     * Get iddonvithuly
     *
     * @return \Acme\KLBundle\Entity\Donvithuly 
     */
    public function getIddonvithuly()
    {
        return $this->iddonvithuly;
    }

    /**
     * Set iddinhkemnhan
     *
     * @param \Acme\KLBundle\Entity\Dinhkemnhanhs $iddinhkemnhan
     * @return Hosotthc
     */
    public function setIddinhkemnhan(\Acme\KLBundle\Entity\Dinhkemnhanhs $iddinhkemnhan = null)
    {
        $this->iddinhkemnhan = $iddinhkemnhan;
    
        return $this;
    }

    /**
     * Get iddinhkemnhan
     *
     * @return \Acme\KLBundle\Entity\Dinhkemnhanhs 
     */
    public function getIddinhkemnhan()
    {
        return $this->iddinhkemnhan;
    }

    /**
     * Set iddinhkemgui
     *
     * @param \Acme\KLBundle\Entity\Dinhkemguihs $iddinhkemgui
     * @return Hosotthc
     */
    public function setIddinhkemgui(\Acme\KLBundle\Entity\Dinhkemguihs $iddinhkemgui = null)
    {
        $this->iddinhkemgui = $iddinhkemgui;
    
        return $this;
    }

    /**
     * Get iddinhkemgui
     *
     * @return \Acme\KLBundle\Entity\Dinhkemguihs 
     */
    public function getIddinhkemgui()
    {
        return $this->iddinhkemgui;
    }

    /**
     * Set idcongdan
     *
     * @param \Acme\KLBundle\Entity\Congdan $idcongdan
     * @return Hosotthc
     */
    public function setIdcongdan(\Acme\KLBundle\Entity\Congdan $idcongdan = null)
    {
        $this->idcongdan = $idcongdan;
    
        return $this;
    }

    /**
     * Get idcongdan
     *
     * @return \Acme\KLBundle\Entity\Congdan 
     */
    public function getIdcongdan()
    {
        return $this->idcongdan;
    }
}