<?php

namespace App\Controller;
use App\Entity\Blog;
use App\Form\UploadType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @IsGranted("ROLE_USER")
 * 
 */

class WriteBlogController extends AbstractController
{
   

// enregistrement d'un nouveau blog

    #[Route('/write/blog', name: 'write_blog')]
    public function index(Request $request,EntityManagerInterface $em): Response
    {
        $Blog = new Blog();
        $form = $this->createForm(UploadType::class, $Blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $titre = $Blog->getTitre();
            $content = $Blog->getContent();
            $file = $Blog->getFichier();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_destination'),$filename);
            $Blog->setTitre($titre);
            $Blog->setContent($content);
            $Blog->setFichier($filename);
            $em->persist($Blog);
            $em->flush();

            return $this->render('write_blog/index.html.twig',array('form'=>$form->createView()));

        }
        return $this->render('write_blog/index.html.twig',array('form'=>$form->createView()));
        
    }




// vue de l'ensemble des annonce dans l'espace administrateur

    #[Route('/VoirAnnonce', name: 'VoirAnnonce')]
    public function VoirAnnonce()
    {
         $datas = $this->getDoctrine()->getRepository(Blog::class)->findAll();
        
        return $this->render('write_blog/ViewAnonce.html.twig',["data"=>$datas]);
        
    }










// suppression des annonce dans l'espace administrateur

#[Route('/Deleteblog/{id}', name: 'Deleteblog')]

public function DeleteBlog(EntityManagerInterface $em,$id)
{
     $datas = $this->getDoctrine()->getRepository(Blog::class)->find($id);

     if (!$datas) {
       
     }else{
        $em->remove($datas);
        $em->flush();
        return  $this->redirectToRoute("VoirAnnonce");
     }

    
}





// Modification d'une annonce   dans l'espace administrateur

    #[Route('/Updateblog/{id}', name: 'Updateblog')]

    public function UpdateAnnonce(Request $request,EntityManagerInterface $em,$id)
    {
        

        $datas = $this->getDoctrine()->getRepository(Blog::class)->find($id);
       

        if (!$datas) {
            
        }else{
            
            $form = $this->CreateFormBuilder($datas)
                    ->add('titre')
                    ->add('content',TextareaType::class,)
                    ->add('submit', SubmitType::class,array('label'=> "Modifier" ))
                    ->getForm();
            $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {
            
                $datas = $form->getData();
                $em->flush();
              return  $this->redirectToRoute("VoirAnnonce");
    
            }else{

                return $this->render('write_blog/UpdateBlog.html.twig',
                ["form"=>$form->createView(),"image"=>$datas]);
            }

        }
   
        
        
    }

}
