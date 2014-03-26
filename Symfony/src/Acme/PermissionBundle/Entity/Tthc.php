<?php

namespace Acme\PermissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tthc
 *
 * @ORM\Table(name="tthc", indexes={@ORM\Index(name="fk_TTHC_Linhvuc1_idx", columns={"Linhvuc_id"})})
 * @ORM\Entity
 */
class Tthc
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="noidungthuchien", type="string", length=45, nullable=true)
     */
    private $noidungthuchien;

    /**
     * @var string
     *
     * @ORM\Column(name="giaytohoso", type="string", length=45, nullable=true)
     */
    private $giaytohoso;

    /**
     * @var string
     *
     * @ORM\Column(name="thogiangiaiquyet", type="string", length=45, nullable=true)
     */
    private $thogiangiaiquyet;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isHide", type="boolean", nullable=true)
     */
    private $ishide;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\PermissionBundle\Entity\Linhvuc
     *
     * @ORM\ManyToOne(targetEntity="Acme\PermissionBundle\Entity\Linhvuc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Linhvuc_id", referencedColumnName="id")
     * })
     */
    private $linhvuc;



    /**
     * Set name
     *
     * @param string $name
     * @return Tthc
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
     * Set noidungthuchien
     *
     * @param string $noidungthuchien
     * @return Tthc
     */
    public function setNoidungthuchien($noidungthuchien)
    {
        $this->noidungthuchien = $noidungthuchien;

        return $this;
    }

    /**
     * Get noidungthuchien
     *
     * @return string 
     */
    public function getNoidungthuchien()
    {
        return $this->noidungthuchien;
    }

    /**
     * Set giaytohoso
     *
     * @param string $giaytohoso
     * @return Tthc
     */
    public function setGiaytohoso($giaytohoso)
    {
        $this->giaytohoso = $giaytohoso;

        return $this;
    }

    /**
     * Get giaytohoso
     *
     * @return string 
     */
    public function getGiaytohoso()
    {
        return $this->giaytohoso;
    }

    /**
     * Set thogiangiaiquyet
     *
     * @param string $thogiangiaiquyet
     * @return Tthc
     */
    public function setThogiangiaiquyet($thogiangiaiquyet)
    {
        $this->thogiangiaiquyet = $thogiangiaiquyet;

        return $this;
    }

    /**
     * Get thogiangiaiquyet
     *
     * @return string 
     */
    public function getThogiangiaiquyet()
    {
        return $this->thogiangiaiquyet;
    }

    /**
     * Set ishide
     *
     * @param boolean $ishide
     * @return Tthc
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set linhvuc
     *
     * @param \Acme\PermissionBundle\Entity\Linhvuc $linhvuc
     * @return Tthc
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
}
