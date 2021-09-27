<?php

namespace App\Controller;
use App\Entity\Blog;
use App\Entity\Annonce;
use App\Form\UploadType;
use App\Form\AnnonceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


/**
 * @IsGranted("ROLE_USER")
 * 
 */

class WriteBlogController extends AbstractController
{
   






// enregistrement d'un nouveau blog

    #[Route('/write/blog', name: 'write_blog')]
    public function index(Request $request): Response
    {
        $Annonce = new Annonce();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(AnnonceType::class, $Annonce);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // recuperation des eleement du formulaire


            $title =  $Annonce->getTitle();
            $category =  $Annonce->getCategory();
            $resumer =  $Annonce->getResumer();
            $firstTitle =  $Annonce->getFirstTitle();
            $contentA =  $Annonce->getContentA();
            $secondTitle =  $Annonce->getSecondTitle();
            $contentB =  $Annonce->getContentB();
            $thirtTitle =  $Annonce->getThirtTitle();
            $contentC =  $Annonce->getContentC();
            $file = $Annonce->getFile();
         


            try {

           
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_destination'),$filename);
                
                // enregistrement des element du formulaire
            
                $Annonce->setCategory($category);
                $Annonce->setFile($filename);
                $Annonce->setResumer($resumer);
                $Annonce->setFirstTitle($firstTitle);
                $Annonce->setContentA($contentA);
                $Annonce->setSecondTitle($secondTitle);
                $Annonce->setContentB($contentB);
                $Annonce->setThirtTitle($thirtTitle);
                $Annonce->setContentC($contentC);
                $entityManager->persist($Annonce);
                $entityManager->flush();

        // cas de l'operation d'enregistrement avec succes 

                $this->addFlash(
                    'Success',
                    'votre annonce a ete bien enregistrer'
                );

          return $this->render('Write_Blog/index.html.twig',['form'=>$form->createView()]);  
                

            } catch (FileException $th) {
                
                $this->addFlash(
                    'errorData',
                    "une erreur c'est prduit lors du chargement de vos donnees"
                 );
    // cas d'une erreur de chargement de fichier

     return $this->render('Write_Blog/index.html.twig',['form'=>$form->createView()]); 
            }

 
        
        }else {
            $this->addFlash(
               'errorSaisie',
               'veuillez remplir correctement les champs '
            );

     // cas de mauvaise saisie des champs du formulaire

        return $this->render('Write_Blog/index.html.twig',['form'=>$form->createView()]); 
        }

// creation du formulaire d'annonce
        return $this->render('Write_Blog/index.html.twig',['form'=>$form->createView()]);
    }



























// vue de l'ensemble des annonce dans l'espace administrateur

    #[Route('/VoirAnnonce', name: 'VoirAnnonce')]
    public function VoirAnnonce()
    {
         $datas = $this->getDoctrine()->getRepository(Annonce::class)->findAll();
        
        return $this->render('write_blog/ViewAnonce.html.twig',["data"=>$datas]);
        
    }










// suppression des annonce dans l'espace administrateur

#[Route('/Deleteblog/{id}', name: 'Deleteblog')]

public function DeleteBlog($id)
{
    $entityManager = $this->getDoctrine()->getManager();
    $Annonce = $entityManager->getRepository(Annonce::class)->findOneBy(["id"=>$id]);

    if (!$Annonce) {
        
        $this->addFlash("error","l'annonce n'a pas pu etre trouver, veuillez reesaiyer");

    }else {

        $entityManager->remove($Annonce);
        $entityManager->flush();
        $this->addFlash("success","votre annonce a bien ete supprimer!!!");
        return $this->redirectToRoute('ListeAnnonce');

    }

    
}




















// Modification d'une annonce   dans l'espace administrateur

    #[Route('/Updateblog/{id}', name: 'Updateblog')]

    public function UpdateAnnonce(Request $request, $id)
    {
        

   
        $entityManager = $this->getDoctrine()->getManager();
        $Annonce =  $this->getDoctrine()->getRepository(Annonce::class)->find($id);

        if (!$Annonce) {
            
            $this->addFlash("error","l'annonce n'a pas pu etre trouver, veuillez reesaiyer");
            return $this->redirectToRoute('ListeAnnonce');

        }else {
           $form = $this->createFormBuilder($Annonce)
           ->add('title', TextType::class)
           ->add('category', TextType::class)
           ->add('resumer', TextareaType::class)
           ->add('firstTitle', TextType::class)
           ->add('ContentA', TextareaType::class)
           ->add('secondTitle', TextType::class , array('required' => false,))
           ->add('ContentB', TextareaType::class , array('required' => false,))
           ->add('thirtTitle', TextType::class , array('required' => false,))
           ->add('ContentC', TextareaType::class, array('required' => false,))
           ->add("Poster", SubmitType::class)
           ->getForm()  
           ;
           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {

               $Update = $form->getData();
               $entityManager->flush();
               $this->addFlash("success","votre annonce a bien ete modifier!!!");
               return $this->redirectToRoute('ListeAnnonce');
               
           }
         
           $this->addFlash(
            'errorSaisie',
            'veuillez remplir correctement les champs '
           );
        //    dd($Annonce);
           return $this->render('Write_Blog/UpdateBlog.html.twig',["form"=>$form->createView(),"img"=>$Annonce,]);
       
            
        }


    }

}
