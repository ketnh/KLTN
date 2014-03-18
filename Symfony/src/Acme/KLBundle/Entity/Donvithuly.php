<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donvithuly
 *
 * @ORM\Table(name="donvithuly")
 * @ORM\Entity
 */
class Donvithuly
{
    /**
     * @var string
     *
     * @ORM\Column(name="NameDonViThuLy", type="string", length=45, nullable=false)
     */
    private $namedonvithuly;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDonViThuLy", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddonvithuly;

    /**
     * @var \Acme\KLBundle\Entity\Chuyenvienthuly
     *
     * @ORM\ManyToOne(targetEntity="Acme\KLBundle\Entity\Chuyenvienthuly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTruongDonVi", referencedColumnName="idChuyenVienThuLy")
     * })
     */
    private $idtruongdonvi;



    /**
     * Set namedonvithuly
     *
     * @param string $namedonvithuly
     * @return Donvithuly
     */
    public function setNamedonvithuly($namedonvithuly)
    {
        $this->namedonvithuly = $namedonvithuly;
    
        return $this;
    }

    /**
     * Get namedonvithuly
     *
     * @return string 
     */
    public function getNamedonvithuly()
    {
        return $this->namedonvithuly;
    }

    /**
     * Get iddonvithuly
     *
     * @return integer 
     */
    public function getIddonvithuly()
    {
        return $this->iddonvithuly;
    }

    /**
     * Set idtruongdonvi
     *
     * @param \Acme\KLBundle\Entity\Chuyenvienthuly $idtruongdonvi
     * @return Donvithuly
     */
    public function setIdtruongdonvi(\Acme\KLBundle\Entity\Chuyenvienthuly $idtruongdonvi = null)
    {
        $this->idtruongdonvi = $idtruongdonvi;
    
        return $this;
    }

    /**
     * Get idtruongdonvi
     *
     * @return \Acme\KLBundle\Entity\Chuyenvienthuly 
     */
    public function getIdtruongdonvi()
    {
        return $this->idtruongdonvi;
    }
}