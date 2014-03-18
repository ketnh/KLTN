<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinhkemguihs
 *
 * @ORM\Table(name="dinhkemguihs")
 * @ORM\Entity
 */
class Dinhkemguihs
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
     * @ORM\Column(name="idDinhKemGuiHS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddinhkemguihs;



    /**
     * Set tenfiledinhkem
     *
     * @param string $tenfiledinhkem
     * @return Dinhkemguihs
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
     * @return Dinhkemguihs
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
     * Get iddinhkemguihs
     *
     * @return integer 
     */
    public function getIddinhkemguihs()
    {
        return $this->iddinhkemguihs;
    }
}