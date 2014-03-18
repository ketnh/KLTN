<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinhkemnhanhs
 *
 * @ORM\Table(name="dinhkemnhanhs")
 * @ORM\Entity
 */
class Dinhkemnhanhs
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenFileDinhKem", type="string", length=45, nullable=false)
     */
    private $tenfiledinhkem;

    /**
     * @var string
     *
     * @ORM\Column(name="PathToFile", type="string", length=45, nullable=false)
     */
    private $pathtofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDinhKemNhanHS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddinhkemnhanhs;



    /**
     * Set tenfiledinhkem
     *
     * @param string $tenfiledinhkem
     * @return Dinhkemnhanhs
     */
    public function setTenfiledinhkem($tenfiledinhkem)
    {
        $this->tenfiledinhkem = $tenfiledinhkem;
    
        return $this;
    }

    /**
     * Get tenfiledinhkem
     *
     * @return string 
     */
    public function getTenfiledinhkem()
    {
        return $this->tenfiledinhkem;
    }

    /**
     * Set pathtofile
     *
     * @param string $pathtofile
     * @return Dinhkemnhanhs
     */
    public function setPathtofile($pathtofile)
    {
        $this->pathtofile = $pathtofile;
    
        return $this;
    }

    /**
     * Get pathtofile
     *
     * @return string 
     */
    public function getPathtofile()
    {
        return $this->pathtofile;
    }

    /**
     * Get iddinhkemnhanhs
     *
     * @return integer 
     */
    public function getIddinhkemnhanhs()
    {
        return $this->iddinhkemnhanhs;
    }
}