<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Compteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @IsGranted("ROLE_USER")
 * 
 */



class TchatadminController extends AbstractController
{
    #[Route('/tchatadmin', name: 'tchatadmin')]
    public function index(): Response
    {
        return $this->render('tchatadmin/index.html.twig');
    }




    #[Route('/sendMessagePersonnel', name: 'sendMessagePersonnel')]
    public function sendMessagePersonnel(Request $request,EntityManagerInterface $em)
    {
        if ($request->isXmlHttpRequest()) {
        $sms=$request->request->get('message');
        $email=$request->request->get('email');
        }
        $message=new Message();
        $message->setEmail($email);
        $message->setMessage($sms);
        $message->setIduser($this->getUser()->getId());
        $em->persist($message);
        $em->flush();
 
    // resultat de la fonction de recuperation des message de l'utilisateur connecternou personnel

      $data = $this->getDoctrine()->getRepository(Message::class)->findBy(['iduser'=>$this->getUser()->getId()],['id'=>'DESC'],1);

      return $this->render('tchatadmin/response.html.twig',['message'=>$data]);
    }









    // recuperation de toutes les notifications des messages envoyer

    #[Route('/recherchernotification', name:'recherchernotification')]
    public function recherchernotification(){

        $data = $this->getDoctrine()->getRepository(Compteur::class)->findAll();

        return $this->render('tchatadmin/NotificationMessage.html.twig',['compt'=>$data]);
    }






    
    // recuperation de toutes messages envoyer par le client

    #[Route('/loadmessagePersonnel', name:'loadmessagePersonnel')]

    public function loadmessagePersonnel(Request $request,EntityManagerInterface $em){

        $email = $request->request->get("email");

        // connection a la base de donnee

        $entityManager = $this->getDoctrine()->getManager();

        // recuperation des element de la table compteur propre a l'utilisateur

        $Compteur = new Compteur();
    
        $valeur = $entityManager ->getRepository(Compteur::class)->findOneBy(['email'=>$email]);
    
        if ($valeur) {
    
        $UpdateNumber = $valeur->getNombre();
    
        $UpdateNumber = 0; 
    
        $valeur->setNombre($UpdateNumber);
    
        $entityManager->flush();
                                
        }
        

        $data = $this->getDoctrine()->getRepository(Message::class)->findAll();

        return $this->render('tchatadmin/LoadMessage.html.twig',['data'=>$data,"email"=>$email]);
    }










     // recuperation de toutes les message que le clent envois au personnel

     #[Route('/loadNewmessagePersonnel', name:'loadNewmessagePersonnel')]

     public function loadNewmessagePersonnel(Request $request){
 
        if ($request->isXmlHttpRequest()) {

            $email = $request->request->get("email");

            $id = $request->request->get("id");
    
        }
        
         $data = $this->getDoctrine()->getRepository(Message::class)->findBy(["email"=>$email]);
 
         return $this->render('tchatadmin/RecupLoadMessage.html.twig',['data'=>$data,'id'=>$id,'email'=>$email],);
     }
}
