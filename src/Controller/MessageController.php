<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Compteur;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 

class MessageController extends AbstractController
{






    /**
     * controlleur d'envoie des messaga en base de donnée
     */
    #[Route('/sendmessage', name: 'sendmessage')]
    public function index(Request $request,EntityManagerInterface $em)
    {



// creation d'un objet compteur

    $Compteur = new Compteur();
    $nombre = 1;    
    $sms=$request->request->get('message');
    $email=$request->request->get('email');
    $message=new Message();
    $message->setEmail($email);
    $message->setMessage($sms);
    $message->setIduser(0);
    $em->persist($message);
    $em->flush();
// connection a la base de donnee

    $entityManager = $this->getDoctrine()->getManager();

// recuperation des element de la table compteur propre a l'utilisateur

    $valeur = $entityManager ->getRepository(Compteur::class)->findOneBy(['email'=>$email]);

    if (!$valeur) {

        $Compteur->setEmail($email);
        $Compteur->setNombre($nombre);
        $em->persist($Compteur);
        $em->flush();

    }elseif ($valeur) {

    $UpdateNumber = $valeur->getNombre();

    $UpdateNumber++;

    if ($UpdateNumber >= 1) {

        $valeur->setNombre($UpdateNumber);

        $entityManager->flush();
         
    }
                 
              
    }
          

    return $this->redirectToRoute('UploadMessageUserNoConnect',['email'=>$email]);
 
    }









  /**
     * controlleur de recuperation du message du user non connecter
     */

    #[Route('/UploadMessageUserNoConnect/{email}', name:'UploadMessageUserNoConnect')]
       
    public function UploadMessageUserNoConnect($email){

 
      // resultat de la fonction de recuperation des message de l'utilisateur non connecter

      $data = $this->getDoctrine()->getRepository(Message::class)->findBy(['email'=>$email],['id'=>'DESC'],1);

      return $this->render('message/response.html.twig',['message'=>$data]);

    }
    






    /**
     * controlleur de recuperation des messaged en base donnee
     */

    #[Route('/getmessageinternaute', name:'getmessageinternaute')]
       
    public function RechercherMessageOfUserNoConnect(Request $request){


        if ($request->isXmlHttpRequest()) {

            $id = $request->request->get("id");

            $email = $request->request->get("email");

         }
       
       

        $data = $this->getDoctrine()->getRepository(Message::class)->findAll(['email'=>$email]);

       return $this->render('message/lala.html.twig',['messag' => $data,'id' => $id]);
     }


 



}


