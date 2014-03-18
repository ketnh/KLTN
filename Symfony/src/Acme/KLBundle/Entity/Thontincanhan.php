<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thontincanhan
 *
 * @ORM\Table(name="thontincanhan")
 * @ORM\Entity
 */
class Thontincanhan
{
    /**
     * @var string
     *
     * @ORM\Column(name="hoten", type="string", length=45, nullable=true)
     */
    private $hoten;

    /**
     * @var string
     *
     * @ORM\Column(name="quequan", type="string", length=45, nullable=true)
     */
    private $quequan;

    /**
     * @var string
     *
     * @ORM\Column(name="CMTND", type="string", length=45, nullable=true)
     */
    private $cmtnd;

    /**
     * @var string
     *
     * @ORM\Column(name="SDT", type="string", length=45, nullable=true)
     */
    private $sdt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ngaysinh", type="date", nullable=true)
     */
    private $ngaysinh;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set hoten
     *
     * @param string $hoten
     * @return Thontincanhan
     */
    public function setHoten($hoten)
    {
        $this->hoten = $hoten;
    
        return $this;
    }

    /**
     * Get hoten
     *
     * @return string 
     */
    public function getHoten()
    {
        return $this->hoten;
    }

    /**
     * Set quequan
     *
     * @param string $quequan
     * @return Thontincanhan
     */
    public function setQuequan($quequan)
    {
        $this->quequan = $quequan;
    
        return $this;
    }

    /**
     * Get quequan
     *
     * @return string 
     */
    public function getQuequan()
    {
        return $this->quequan;
    }

    /**
     * Set cmtnd
     *
     * @param string $cmtnd
     * @return Thontincanhan
     */
    public function setCmtnd($cmtnd)
    {
        $this->cmtnd = $cmtnd;
    
        return $this;
    }

    /**
     * Get cmtnd
     *
     * @return string 
     */
    public function getCmtnd()
    {
        return $this->cmtnd;
    }

    /**
     * Set sdt
     *
     * @param string $sdt
     * @return Thontincanhan
     */
    public function setSdt($sdt)
    {
        $this->sdt = $sdt;
    
        return $this;
    }

    /**
     * Get sdt
     *
     * @return string 
     */
    public function getSdt()
    {
        return $this->sdt;
    }

    /**
     * Set ngaysinh
     *
     * @param \DateTime $ngaysinh
     * @return Thontincanhan
     */
    public function setNgaysinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;
    
        return $this;
    }

    /**
     * Get ngaysinh
     *
     * @return \DateTime 
     */
    public function getNgaysinh()
    {
        return $this->ngaysinh;
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
}