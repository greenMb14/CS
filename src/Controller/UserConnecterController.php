<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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



    #[Route('/Personnel', name:'Personnel')]
    public function Personnel()
    {  
        $CreateUser = new User();
             $form = $this->createFormBuilder($CreateUser)
                 ->add('username', TextType::class)
                 ->add('Password', TextType::class)
                 ->add('Inscris',SubmitType::class)
                 ->getForm();

        return $this->render('user_connecter/SaveUser.html.twig',['form' => $form->createView(),]);
       
    }


}
