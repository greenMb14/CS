<?php

namespace App\Controller;

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
         $ommentaire=$request->request->get('commentaire');
         $idAnnonce='';
         $email=$request->request->get('email');
         $comment=new Commentaires();
         $comment->setCommentaires('');
         $comment->setEmail('');
         $comment->setIdAnnonce('');
         $em->persist($comment);
         $em->flush();

     }




}
