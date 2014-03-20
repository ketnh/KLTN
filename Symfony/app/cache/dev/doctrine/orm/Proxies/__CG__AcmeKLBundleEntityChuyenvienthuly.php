<?php

namespace Proxies\__CG__\Acme\KLBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Chuyenvienthuly extends \Acme\KLBundle\Entity\Chuyenvienthuly implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setNamecb($namecb)
    {
        $this->__load();
        return parent::setNamecb($namecb);
    }

    public function getNamecb()
    {
        $this->__load();
        return parent::getNamecb();
    }

    public function setNgaysinh($ngaysinh)
    {
        $this->__load();
        return parent::setNgaysinh($ngaysinh);
    }

    public function getNgaysinh()
    {
        $this->__load();
        return parent::getNgaysinh();
    }

    public function getIdchuyenvienthuly()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idchuyenvienthuly"];
        }
        $this->__load();
        return parent::getIdchuyenvienthuly();
    }

    public function setIddonvithuly(\Acme\KLBundle\Entity\Donvithuly $iddonvithuly = NULL)
    {
        $this->__load();
        return parent::setIddonvithuly($iddonvithuly);
    }

    public function getIddonvithuly()
    {
        $this->__load();
        return parent::getIddonvithuly();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'namecb', 'ngaysinh', 'idchuyenvienthuly', 'iddonvithuly');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}