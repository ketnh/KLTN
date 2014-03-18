<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Congdan
 *
 * @ORM\Table(name="congdan")
 * @ORM\Entity
 */
class Congdan
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ngaysinh", type="date", nullable=false)
     */
    private $ngaysinh;

    /**
     * @var string
     *
     * @ORM\Column(name="QueQuan", type="string", length=45, nullable=false)
     */
    private $quequan;

    /**
     * @var string
     *
     * @ORM\Column(name="SDT", type="string", length=45, nullable=false)
     */
    private $sdt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCongDan", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcongdan;



    /**
     * Set name
     *
     * @param string $name
     * @return Congdan
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ngaysinh
     *
     * @param \DateTime $ngaysinh
     * @return Congdan
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
     * Set quequan
     *
     * @param string $quequan
     * @return Congdan
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
     * Set sdt
     *
     * @param string $sdt
     * @return Congdan
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
     * Set email
     *
     * @param string $email
     * @return Congdan
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
     * Get idcongdan
     *
     * @return integer 
     */
    public function getIdcongdan()
    {
        return $this->idcongdan;
    }
}