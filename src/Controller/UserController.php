<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Commentaires;
use App\Entity\LikeAnnonce;
use App\Entity\UnlikeAnnonce;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\UserAuthenticator;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{

    private $passwordEncode;
    public function __construct(UserPasswordEncoderInterface $passwordEncode)
    {
        $this->passwordEncode=$passwordEncode;
    }
   
    






    #[Route('/', name: 'user')]
    public function index(): Response
    {
        return $this->render('user/Acceuil.html.twig');   
    }







    /**
     * route por l'equipe de la structure
     */

    #[Route('/Team', name: 'Team')]
    public function Team(): Response
    {
        return $this->render('user/team.html.twig');   
    }









    /**
     * route pour le temoiniage
     */

    #[Route('/Testimony', name: 'Testimony')]
    public function Testimony(): Response
    {
        return $this->render('user/testimony.html.twig');   

    }

    
//////////////////////////////////////////////////////////////////////////////////////////









    #[Route('/response', name: 'response')]
    public function Tes(): Response
    {
        return $this->render('message/lala.html.twig');   
    }









    /**
     * route pour les services 
     */

    #[Route('/ServiceWed', name: 'ServiceWed')]
    public function SeviceWed(): Response
    {
        return $this->render('user/serviceWed.html.twig');   
    }










    #[Route('/ServiceDigital', name: 'ServiceDigital')]
    public function SeviceDigital(): Response
    {
        return $this->render('user/serviceDigital.html.twig');   
    }








    #[Route('/ServiceVideos', name: 'ServiceVideos')]
    public function SeviceVideo(): Response
    {
        return $this->render('user/serviceVideo.html.twig');   
    }







    #[Route('/ServiceGrafic', name: 'ServiceGrafic')]
    public function SeviceGrafic(): Response
    {
        return $this->render('user/serviceGrafique.html.twig');   
    }










    /**
     * fin des service et debut du porfolio
     */

    #[Route('/porfolio', name: 'porfolio')]
    public function Porfolio(): Response
    {
        return $this->render('user/porfolio.html.twig');   
    }









 
    #[Route('/bloc', name: 'bloc')]
    public function bloc(): Response
    {
 
        $annonce = $this->getDoctrine()->getRepository(Annonce::class)->findBy(array(),array('id' => 'DESC'),7); 

        $AllAnnonce = $this->getDoctrine()->getRepository(Annonce::class)->findBy(array(),array('id' => 'DESC')); 

            
        return $this->render('user/bloc.html.twig',["data"=>$annonce,"Alldata"=>$AllAnnonce]);   
    }







    /**
     * route pour le contact
     */

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('user/contact.html.twig');   
    }
    







    /**
     * route de redirection au formullaire d inscription
     */

    #[Route('/inscrit', name: 'inscrit')]
    public function inscrit(): Response
    {
        return $this->render('user/form1.html.twig');   
    }











    #[Route('/test', name: 'test')]
    public function sup(): Response
    {
        return $this->render('message/index.html.twig');   
    }












 










}
