<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hoidaptt
 *
 * @ORM\Table(name="hoidaptt")
 * @ORM\Entity
 */
class Hoidaptt
{
    /**
     * @var string
     *
     * @ORM\Column(name="CauHoi", type="string", length=45, nullable=false)
     */
    private $cauhoi;

    /**
     * @var string
     *
     * @ORM\Column(name="CauTraLoi", type="string", length=45, nullable=true)
     */
    private $cautraloi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isHide", type="boolean", nullable=false)
     */
    private $ishide;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHoiDapTT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhoidaptt;

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
     * @var \Acme\KLBundle\Entity\Donvithuly
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Donvithuly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDonViThuLy", referencedColumnName="idDonViThuLy")
     * })
     */
    private $iddonvithuly;

    /**
     * @var \Acme\KLBundle\Entity\Linhvuc
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Linhvuc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTTHC", referencedColumnName="idLinhVuc")
     * })
     */
    private $idtthc;



    /**
     * Set cauhoi
     *
     * @param string $cauhoi
     * @return Hoidaptt
     */
    public function setCauhoi($cauhoi)
    {
        $this->cauhoi = $cauhoi;
    
        return $this;
    }

    /**
     * Get cauhoi
     *
     * @return string 
     */
    public function getCauhoi()
    {
        return $this->cauhoi;
    }

    /**
     * Set cautraloi
     *
     * @param string $cautraloi
     * @return Hoidaptt
     */
    public function setCautraloi($cautraloi)
    {
        $this->cautraloi = $cautraloi;
    
        return $this;
    }

    /**
     * Get cautraloi
     *
     * @return string 
     */
    public function getCautraloi()
    {
        return $this->cautraloi;
    }

    /**
     * Set ishide
     *
     * @param boolean $ishide
     * @return Hoidaptt
     */
    public function setIshide($ishide)
    {
        $this->ishide = $ishide;
    
        return $this;
    }

    /**
     * Get ishide
     *
     * @return boolean 
     */
    public function getIshide()
    {
        return $this->ishide;
    }

    /**
     * Get idhoidaptt
     *
     * @return integer 
     */
    public function getIdhoidaptt()
    {
        return $this->idhoidaptt;
    }

    /**
     * Set idcongdan
     *
     * @param \Acme\KLBundle\Entity\Congdan $idcongdan
     * @return Hoidaptt
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

    /**
     * Set iddonvithuly
     *
     * @param \Acme\KLBundle\Entity\Donvithuly $iddonvithuly
     * @return Hoidaptt
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
     * Set idtthc
     *
     * @param \Acme\KLBundle\Entity\Linhvuc $idtthc
     * @return Hoidaptt
     */
    public function setIdtthc(\Acme\KLBundle\Entity\Linhvuc $idtthc = null)
    {
        $this->idtthc = $idtthc;
    
        return $this;
    }

    /**
     * Get idtthc
     *
     * @return \Acme\KLBundle\Entity\Linhvuc 
     */
    public function getIdtthc()
    {
        return $this->idtthc;
    }
}