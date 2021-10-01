<?php

namespace App\Controller;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @IsGranted("ROLE_USER")
 * 
 */
class UserConnecterController extends AbstractController
{
   
   


    private $passwordEncode;
    public function __construct(UserPasswordEncoderInterface $passwordEncode)
    {
        $this->passwordEncode=$passwordEncode;
    }
   
   
    /**
     * redirection du user lors de son log
     */

    #[Route('/redirection', name:'redirection')]
    public function redirection(): Response
    {  
             return $this->render("user_connecter/index.html.twig");
       
    }




















// redirection vers le formulaire pour ajout d'un nouvau personnel par l'administrateur

    #[Route('/Personnel', name:'Personnel')]
    public function Personnel( )
    {  
        return $this->render('user_connecter/SaveUser.html.twig',);
       
    }
















    /**
     *  inscription du user par l administrateur
     */

    #[Route('/Add', name: 'Add')]

    public function Add(Request $request,EntityManagerInterface $em){

       
        $user = new User();


        if ( $request->request->get('ComfirmPassword') === $request->request->get('Password')) {



                    if (strlen(trim($request->request->get('Password'))) <= 8) {

                        $this->addFlash(
                            'errorB',
                            "la longueur minimale d'un mot de pass est de 9 caracteres"
                        );
            
                        return $this->render('user_connecter/SaveUser.html.twig',);
                        
                    }else{

                            if (strlen(trim($request->request->get('username'))) <= 8) {

                                $this->addFlash(
                                    'errorC',
                                    "la longueur minimale d'un Username est de 9 caracteres"
                                );
                    
                                return $this->render('user_connecter/SaveUser.html.twig',);

                                
                            }else{

                                $user->setUsername( $request->request->get('username'));
                                $user->setPassword($this->passwordEncode->encodePassword($user,$request->request->get('Password')));
                                $user->setRoles(['ROLE_USER']);
                                $em->persist($user);
                                $em->flush();
                    
                                $this->addFlash(
                                    'Success',
                                    'Votre nouveau personnel a ete bien enregistrer'
                                );
                    
                                return $this->render('user_connecter/SaveUser.html.twig',);
                                
                            }

              

                    }

         
             
        
        }else{

            $this->addFlash(
               'error',
               'vos mots de pass ne sont pas synchrone'
            );

            return $this->render('user_connecter/SaveUser.html.twig',);

        }
      
    }




















//  affichage de tout le personnel par l'administrateur principale

#[Route('/ViewPersonnel', name:'ViewPersonnel')]
public function ViewPersonnel()
{  
    $data = $this->getDoctrine()->getRepository(User::class)->findAll();
    return $this->render('user_connecter/Viewpersonnel.html.twig',["data"=>$data]);
   
}

















//   modification des paramettres d'un utilisateur par l'administrateur

#[Route('/setUpdate/Personnel/{id}', name:'setUpdate_Personnel')]
public function setUpdate_Personnel(Request $request,$id)
{  
 

   $data = $this->getDoctrine()->getRepository(User::class)->findBy(["id"=>$id]);

   $entityManager = $this->getDoctrine()->getManager();

        if (!$data) {


            $this->addFlash(
                'notfound',
                "Desole une erreur c'est produite, veuillez reessaiyer"
            ); 

            $datas = $this->getDoctrine()->getRepository(User::class)->findAll();
            
            return $this->render('user_connecter/Viewpersonnel.html.twig',["data"=>$datas]);


        }else{
              

            if ($request->request->get("Password") === $request->request->get("ComfirmPassword")) {

                if (strlen(trim($request->request->get("Password"))) <= 8) {
    
                    $this->addFlash(
                        'errorlength',
                        "la longueur minimale d'un mot de pass est de 9 caracteres"
                    ); 
                    
                    return $this->render('user_connecter/UpdateUser.html.twig',["data"=>$data]);
                    
                }else {
    
                    if (strlen(trim($request->request->get("username"))) <= 8) {
    
                                
                            $this->addFlash(
                                'errorlengthB',
                                "la longueur minimale d'un Username est de 9 caracteres"
                            ); 
                            
                            return $this->render('user_connecter/UpdateUser.html.twig',["data"=>$data]);
                                
                    }else{

                         for ($i=0; $i < count($data); $i++) { 


                        $data[$i]->setUsername($request->request->get("username"));
                        $data[$i]->setPassword($this->passwordEncode->encodePassword($data[$i],$request->request->get('Password')));
                        $entityManager->flush();

    
                        $this->addFlash(
                            'Success',
                            "les information de votre personnel on bien ete modifier avec Success"
                        ); 
    
                        $datas = $this->getDoctrine()->getRepository(User::class)->findAll();
                        
                        return $this->render('user_connecter/Viewpersonnel.html.twig',["data"=>$datas]);


                         }  
                        
                    }
                    
                }
         
       }else{
                $this->addFlash(
                    'error',
                    'Vos mot de pass ne sont pas synchrone'
                );
    
                return $this->render('user_connecter/UpdateUser.html.twig',["data"=>$data]);
    
       }


            
        }
    

   
}
















//   modification des paramettres d'un utilisateur par l'administrateur

#[Route('/getUpdate/Personnel/{id}', name:'getUpdate_Personnel')]
public function getUpdate_Personnel($id)
{  
    $data = $this->getDoctrine()->getRepository(User::class)->findBy(["id"=>$id]);
 
    return $this->render('user_connecter/UpdateUser.html.twig',["data"=>$data]);
   
}























//   modification des paramettres d'un utilisateur par l'administrateur

#[Route('/Delete/Personnel/{id}', name:'Delete_Personnel')]
public function Delete_Personnel($id)
{  
    $entityManager = $this->getDoctrine()->getManager();

    $data = $this->getDoctrine()->getRepository(User::class)->findOneBy(["id"=>$id]);

    $datas = $this->getDoctrine()->getRepository(User::class)->findAll();

            if (!$data) {

                        $this->addFlash(
                        'notfound',
                        "Desole une erreur c'est produit, veuillez reessaiyer "
                        );
                        
                        
                    return $this->render('user_connecter/Viewpersonnel.html.twig',["data"=>$datas]);
            }else{
    
                   $entityManager->remove($data);
                   $entityManager->flush();

                    $this->addFlash(
                        'Success',
                        "Votre personnel a bien ete supprimer"
                    );
                    
                    
                    return $this->render('user_connecter/Viewpersonnel.html.twig',["data"=>$datas]);
          
               
            }
 
   
}








}
