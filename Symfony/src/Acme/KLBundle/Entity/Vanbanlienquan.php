<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vanbanlienquan
 *
 * @ORM\Table(name="vanbanlienquan")
 * @ORM\Entity
 */
class Vanbanlienquan
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenVBLQ", type="string", length=45, nullable=false)
     */
    private $tenvblq;

    /**
     * @var string
     *
     * @ORM\Column(name="PathToVBLQ", type="string", length=45, nullable=false)
     */
    private $pathtovblq;

    /**
     * @var integer
     *
     * @ORM\Column(name="idVanBanLienQuan", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvanbanlienquan;



    /**
     * Set tenvblq
     *
     * @param string $tenvblq
     * @return Vanbanlienquan
     */
    public function setTenvblq($tenvblq)
    {
        $this->tenvblq = $tenvblq;
    
        return $this;
    }

    /**
     * Get tenvblq
     *
     * @return string 
     */
    public function getTenvblq()
    {
        return $this->tenvblq;
    }

    /**
     * Set pathtovblq
     *
     * @param string $pathtovblq
     * @return Vanbanlienquan
     */
    public function setPathtovblq($pathtovblq)
    {
        $this->pathtovblq = $pathtovblq;
    
        return $this;
    }

    /**
     * Get pathtovblq
     *
     * @return string 
     */
    public function getPathtovblq()
    {
        return $this->pathtovblq;
    }

    /**
     * Get idvanbanlienquan
     *
     * @return integer 
     */
    public function getIdvanbanlienquan()
    {
        return $this->idvanbanlienquan;
    }
}