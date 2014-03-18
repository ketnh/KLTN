<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chuyenvienbp1c
 *
 * @ORM\Table(name="chuyenvienbp1c")
 * @ORM\Entity
 */
class Chuyenvienbp1c
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
     * @ORM\Column(name="NgaySinh", type="date", nullable=false)
     */
    private $ngaysinh;

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
     * @var string
     *
     * @ORM\Column(name="QueQuan", type="string", length=45, nullable=false)
     */
    private $quequan;

    /**
     * @var string
     *
     * @ORM\Column(name="ChucVu", type="string", length=45, nullable=false)
     */
    private $chucvu;

    /**
     * @var integer
     *
     * @ORM\Column(name="idChuyenvienBP1C", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchuyenvienbp1c;



    /**
     * Set name
     *
     * @param string $name
     * @return Chuyenvienbp1c
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
     * @return Chuyenvienbp1c
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
     * Set sdt
     *
     * @param string $sdt
     * @return Chuyenvienbp1c
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
     * @return Chuyenvienbp1c
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
     * Set quequan
     *
     * @param string $quequan
     * @return Chuyenvienbp1c
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
     * Set chucvu
     *
     * @param string $chucvu
     * @return Chuyenvienbp1c
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
     * Get idchuyenvienbp1c
     *
     * @return integer 
     */
    public function getIdchuyenvienbp1c()
    {
        return $this->idchuyenvienbp1c;
    }
}