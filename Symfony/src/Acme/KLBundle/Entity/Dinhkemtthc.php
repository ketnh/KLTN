<?php

namespace Acme\KLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinhkemtthc
 *
 * @ORM\Table(name="dinhkemtthc")
 * @ORM\Entity
 */
class Dinhkemtthc
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenFileDK", type="string", length=45, nullable=false)
     */
    private $tenfiledk;

    /**
     * @var string
     *
     * @ORM\Column(name="PathToFile", type="string", length=45, nullable=false)
     */
    private $pathtofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDinhKemTTHC", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddinhkemtthc;



    /**
     * Set tenfiledk
     *
     * @param string $tenfiledk
     * @return Dinhkemtthc
     */
    public function setTenfiledk($tenfiledk)
    {
        $this->tenfiledk = $tenfiledk;
    
        return $this;
    }

    /**
     * Get tenfiledk
     *
     * @return string 
     */
    public function getTenfiledk()
    {
        return $this->tenfiledk;
    }

    /**
     * Set pathtofile
     *
     * @param string $pathtofile
     * @return Dinhkemtthc
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
     * Get iddinhkemtthc
     *
     * @return integer 
     */
    public function getIddinhkemtthc()
    {
        return $this->iddinhkemtthc;
    }
}