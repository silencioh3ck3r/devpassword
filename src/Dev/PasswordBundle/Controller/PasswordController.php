<?php

namespace Dev\PasswordBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PasswordController extends Controller
{
    public function indexAction()
    {
        $generator = $this->container->get('dev_password.generator');
        
        return $this->render('DevPasswordBundle:Password:index.html.twig', array(
            'password' => $generator->generatorPassword()
        ));
    }
    
    public function testerAction( $str )
    {
        $tester = $this->container->get('dev_password.tester');
        
        return $this->render('DevPasswordBundle:Password:tester.html.twig', array(
            'complexity' => $tester->testerPassword( $str )
        ));
    }
}