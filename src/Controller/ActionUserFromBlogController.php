<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Commentaires;
use App\Entity\LikeAnnonce;
use App\Entity\UnlikeAnnonce;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActionUserFromBlogController extends AbstractController
{





    #[Route('/like/annonce', name: 'like_annonce')]
    public function like_annonce(Request $request,EntityManagerInterface $em)
    {
        $likeAnnonce = new LikeAnnonce();

        $like = 1;
       

        if($request->isXmlHttpRequest()){

            $id = $request->request->get("annonce");

            $entityManager = $this->getDoctrine()->getManager();

            $recuplike =  $entityManager->getRepository(LikeAnnonce::class)->findOneBy(['id_annonce'=>$id]);
        }

            if(!$recuplike){


                $likeAnnonce->setAimer($like);

                $likeAnnonce->setIdAnnonce($id);

                $em->persist($likeAnnonce);

                $em->flush();

            }elseif($recuplike){
                
                $like = $recuplike->getAimer(); 
                              
                $like++;

                $recuplike->setAimer($like);
 
                $em->flush();            

            }

            return new Response($like);

    
    }

















/**
 * pour les acions de delike de utilisateurs nom connecter
 */
    
     #[Route('/dislike_annonce', name: 'dislike_annonce')]

    public function dislike_annonce(Request $request,EntityManagerInterface $em)
    {
        $dislike = new UnlikeAnnonce();

        $nolike = 1;
       

        if($request->isXmlHttpRequest()){

            $id = $request->request->get("annonce");

            $entityManager = $this->getDoctrine()->getManager();

            $recupdislike =  $entityManager->getRepository(UnlikeAnnonce::class)->findOneBy(['id_annonce'=>$id]);
        }

            if(!$recupdislike){


                $dislike->setDetester($nolike);

                $dislike->setIdAnnonce($id);

                $em->persist($dislike);

                $em->flush();

            }elseif($recupdislike){
                
                $nolike = $recupdislike->getDetester(); 
                              
                $nolike++;

                $recupdislike->setDetester($nolike);
 
                $em->flush();            

            }

            return new Response($nolike);

    
    }






    /**
     * tour sur les commentaires
     */
      
    #[Route('/commentaire', name: 'commentaire')]

     public function commentaitre(Request $request,EntityManagerInterface $em){

         $Commentaire=$request->request->get('commentaire');
         $idAnnonce=$request->request->get("id");
         $email=$request->request->get('email');

         $comment=new Commentaires();

         $comment->setCommentaires($Commentaire);
         $comment->setEmail($email);
         $comment->setIdAnnonce($idAnnonce);
         $em->persist($comment);
         $em->flush();

        //  recuperation du nombre de commentaire

        $nombreCommentaires = $this->getDoctrine()->getRepository(Commentaires::class)->findAll();
        for ($i=0; $i <count($nombreCommentaires) ; $i++) { 
            
            if ($nombreCommentaires[$i]->getIdAnnonce() == $idAnnonce) {
                 
                $nombre[] = $nombreCommentaires[$i]->getIdAnnonce();
            }
        }
    
         return new Response(count($nombre)." "."Commentaires");

     }

















     
    //  recuperation des likes d'une annonce


   
    #[Route('/loadlike', name: 'loadlike')]
    public function loadlike(Request $request)
    {

          //  recuperation du nombre de like d'une annonce
      $nombre[] = null;

      $idAnnonce = $request->request->get('id');

        $like = $this->getDoctrine()->getRepository(LikeAnnonce::class)->findAll();
       
         for ($i=0; $i <count($like) ; $i++) { 
             
             if ($like[$i]->getIdAnnonce() == $idAnnonce) {
                  
                 $nombre[] =  $like[$i]->getIdAnnonce();
             }
         }
     
          return new Response(count($nombre));

    
    } 

 
    








     //  recuperation des unlikes d'une annonce


   
     #[Route('/loadunlike', name: 'loadunlike')]
     public function loadunlike(Request $request)
     {
 
           //  recuperation du nombre de like d'une annonce
       $nombre[] = null;
 
       $idAnnonce = $request->request->get('id');
 
         $unlike = $this->getDoctrine()->getRepository(UnLikeAnnonce::class)->findAll();
        
          for ($i=0; $i <count($unlike) ; $i++) { 
              
              if ($unlike[$i]->getIdAnnonce() == $idAnnonce) {
                   
                  $nombre[] =  $unlike[$i]->getIdAnnonce();
              }
          }
      
           return new Response(count($nombre));
 
     
     } 












     
     //  recuperation du nombre de commentiares au chargement de la page d'une annonce


   
     #[Route('/load/number/Commentaire', name: 'load_number_Commentaire')]
     public function load_number_Commentaire(Request $request)
     {
 
           //  recuperation du nombre commentaire d'une annonce
       $nombre[] = null;
 
       $idAnnonce = $request->request->get('id');
 
         $numberComments = $this->getDoctrine()->getRepository(Commentaires::class)->findAll();
        
          for ($i=0; $i <count($numberComments) ; $i++) { 
              
              if ($numberComments[$i]->getIdAnnonce() == $idAnnonce) {
                   
                  $nombre[] =  $numberComments[$i]->getIdAnnonce();
              }
          }
      
           return new Response(count($nombre)." "."Commentaires");
 
     
     } 
















       //   recuperation de toutes les infos lier a article


   
       #[Route('/VoirPlusSur/Article/{id}', name: 'VoirPlusSur_Article')]

       public function VoirPlusSur_Article($id)
       {
   
             //  recuperation   d'une annonce
        
          $Annonce = $this->getDoctrine()->getRepository(Annonce::class)->findBy(["id"=>$id]);

          $Commentaire = $this->getDoctrine()->getRepository(Commentaires::class)->findBy(["id_annonce"=>$id]);

          $nombrelike = count($this->getDoctrine()->getRepository(LikeAnnonce::class)->findBy(["id_annonce"=>$id]));

          $nombreunlike = count($this->getDoctrine()->getRepository(UnlikeAnnonce::class)->findBy(["id_annonce"=>$id]));

          $nombre = count($Commentaire);
         
           return $this->render('user/VoirPlusBlog.html.twig',
           ["data"=>$Annonce,"Commentaire"=>$Commentaire,"nombre"=>$nombre,"like"=>$nombrelike,"unlike"=>$nombreunlike]);
       
       } 


}
