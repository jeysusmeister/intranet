<?php

namespace BackendBundle\Entity;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $cedula;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var \DateTime
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     */
    private $fechaIng;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var string
     */
    private $clave;

    /**
     * @var \BackendBundle\Entity\Rol
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     *
     * @return Usuario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
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
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Usuario
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaIng
     *
     * @param \DateTime $fechaIng
     *
     * @return Usuario
     */
    public function setFechaIng($fechaIng)
    {
        $this->fechaIng = $fechaIng;

        return $this;
    }

    /**
     * Get fechaIng
     *
     * @return \DateTime
     */
    public function getFechaIng()
    {
        return $this->fechaIng;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Usuario
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set tipoUsuario
     *
     * @param \BackendBundle\Entity\Rol $tipoUsuario
     *
     * @return Usuario
     */
    public function setTipoUsuario(\BackendBundle\Entity\Rol $tipoUsuario = null)
    {
        $this->tipoUsuario = $tipoUsuario;

        return $this;
    }

    /**
     * Get tipoUsuario
     *
     * @return \BackendBundle\Entity\Rol
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }
}

