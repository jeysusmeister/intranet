<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BackendBundle\Service;

use Firebase\JWT\JWT;

class JwtService
{
    private $manager;
    private $key;
    
    
    public function __construct($manager) 
    {
        $this->manager=$manager;
        $this->key = 'm1n0mbr355rt rer¡0·$= ¨ḉḉḉḉḉḉḉḉḉḉḉḉççççç´´ḉçççç`` ´  ´´    ´';
    }
    
    public function  auth($email, $clave, $hash=FALSE)
    {
        
        $usuario = $this->manager
                        ->getRepository('BackendBundle:Usuario')
                        ->findOneBy([
                            'email'=>$email,
                            'clave'=>$clave
                        ]);
        
        if(is_object($usuario))
        {
            
            $token = [
                
                'sub'=> $usuario->getId(),
                
                'nombre'=> $usuario->getNombre(),
                
                'apellido'=> $usuario->getApellido(),
                
                'cedula'=> $usuario->getCedula(),
                
                'email'=> $usuario->getEmail(),
                
                'sexo' => $usuario->getSexo(),
                
                'fechaAlta'=> $usuario->getFechaAlta(),
                
                'fechaIngreso'=> $usuario->getFechaIng(),
                
                'status'=> $usuario->getStatus(),
                
                'tipoUsuario'=>$usuario->getTipoUsuario()->getId(),
                
                'clave'=> $usuario->getClave(),
                
                'iat'=> time(),
                
                'exp'=>time()+ (24*60*60*7)
                             
            ];
            
            $token_encoded = JWT::encode($token, $this->key, 'HS256');
            
            $token_decoded = JWT::decode($token_encoded, $this->key, ['HS256']);
            
            if($hash)
            {
                
                $data = $token_encoded;
                
            } else {
                
                $data = $token_decoded;
            }
                        
        } else {
            
            $data = [
                
                'status'=>'error',
                
                'code'=>400,
                
                'message'=>'Error en email o contraseña!'
            ];
        }
                
        return $data;
        
    }
}
