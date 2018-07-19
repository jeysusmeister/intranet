<?php

namespace BackendBundle\Entity;

/**
 * Rol
 */
class Rol
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipoUsuario;


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
     * Set tipoUsuario
     *
     * @param string $tipoUsuario
     *
     * @return Rol
     */
    public function setTipoUsuario($tipoUsuario)
    {
        $this->tipoUsuario = $tipoUsuario;

        return $this;
    }

    /**
     * Get tipoUsuario
     *
     * @return string
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }
}

