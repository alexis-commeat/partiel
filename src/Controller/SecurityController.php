<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="security")
     */
    public function index(): Response
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }



     /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(Request $request): Response
    {
			//récupération des information du formulaire.
			$login = $request->request->get("pseudo");
			$password = $request->request->get("pass");
            return $this->render('security/dashboard.html.twig', [
                'controller_name' => 'SecurityController',
            ]);
}

/**
         * @Route("/logout", name="logout")
         */
        public function logout(EntityManagerInterface $manager, SessionInterface $session): Response
        {
        $session->clear();
        return $this->redirectToRoute ('security');
        }

/**
     * @Route("/login", name="login")
     */
    public function login (Request $request): Response
    {
			//récupération des information du formulaire.
			$login = $request->request->get("pseudo");
			$password = $request->request->get("pass");
            if ($login=="pseudo" && $password=="pass"){
                    $message = "Connexion Reussie✅";
                }else{
                    $message = "ATTENTION : mot de passe incorrect⛔";
            }
        return $this->render('/login.html.twig', [
            'message'=> $message,
        ]);
    }
}

