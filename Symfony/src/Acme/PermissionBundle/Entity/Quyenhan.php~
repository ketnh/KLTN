<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quyenhan
 *
 * @ORM\Table(name="quyenhan")
 * @ORM\Entity
 */
class Quyenhan
{
    /**
     * @var string
     *
     * @ORM\Column(name="ten", type="string", length=45, nullable=false)
     */
    private $ten;

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
     * Set ten
     *
     * @param string $ten
     * @return Quyenhan
     */
    public function setTen($ten)
    {
        $this->ten = $ten;

        return $this;
    }

    /**
     * Get ten
     *
     * @return string 
     */
    public function getTen()
    {
        return $this->ten;
    }

    /**
     * Set mota
     *
     * @param string $mota
     * @return Quyenhan
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
}
