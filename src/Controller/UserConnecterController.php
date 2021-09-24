<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @IsGranted("ROLE_USER")
 * 
 */
class UserConnecterController extends AbstractController
{
    /**
     * redirection du user lors de son log
     */

    #[Route('/redirection', name:'redirection')]
    public function redirection(): Response
    {  
             return $this->render("user_connecter/index.html.twig");
       
    }


}
