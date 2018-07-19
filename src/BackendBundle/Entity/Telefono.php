<?php

namespace BackendBundle\Entity;

/**
 * Telefono
 */
class Telefono
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var \BackendBundle\Entity\Usuario
     */
    private $idUsuario;


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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set idUsuario
     *
     * @param \BackendBundle\Entity\Usuario $idUsuario
     *
     * @return Telefono
     */
    public function setIdUsuario(\BackendBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \BackendBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}

