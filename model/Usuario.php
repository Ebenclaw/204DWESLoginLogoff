<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */

class Usuario{
    /*
     * Atributos de Usuario
     */
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaUltimaConexion;
    private $perfil;
    private $imagenUsuario;
    
    /*
     * Constructor de Usuario
     */
    public function __construct($codUsuario, $password, $descUsuario, $numAcceso, $fechaHoraUltimaConexion, $fechaHoraUltimaConexionAnterior, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numAcceso = $numAcceso;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->perfil = $perfil;
    }
}

