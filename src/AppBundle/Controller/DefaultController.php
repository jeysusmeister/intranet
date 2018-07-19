<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;
use BackendBundle\Service\HelperService;
use BackendBundle\Service\JwtService;

class DefaultController extends Controller
{
    
    public function loginAction(Request $request)
    {        
        $helperService = $this->get(HelperService::class);
        
        $jwtService = $this->get(JwtService::class);
        
        $login = $request->get('login','NULL');
        
        $params = json_decode($login);
        
        if(is_object($params))
        {
        
            $email = ($params->email !== NULL) ? $params->email : NULL;
            
            $clave = ($params->clave !== NULL) ? hash('sha256', $params->clave) : NULL;
            
            $hash = ($params->hash !== NULL) ? $params->hash : NULL;
            
            $emailConstraint = new EmailConstraint();
            
            $emailConstraint->message = "Email inavalido!!!";
            
            $errorEmail = $this->get('validator')->validate($email, $emailConstraint);
                       
            if($email !== NULL && $clave !== NULL && $hash && count($errorEmail)==0)
            {
                              
                $data = $jwtService->auth($email,$clave,$hash);
                
            } else {
                
                $data = $jwtService->auth($email,$clave);
                                
            }
            
        } else {
            
            $data = [
                'status'=>'error',
                'code'=>400,
                'message'=>'no posee ningun tipo de valor'                
            ];
                                   
        }
        
        return $this->json($data);
        
    }
    
    public function registerAction(Request $request)
    {
        
    }
}
