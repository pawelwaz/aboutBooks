<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\AppUser;
use AppBundle\Entity\AppUserExt;
use AppBundle\Form\LoginForm;
use AppBundle\Form\RegisterForm;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
	{
        return $this->render('default/index.html.twig');
    }
	
	/**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
	{
		$regError = "";
		$newUser = new AppUser();
		$registerForm = $this->createForm(RegisterForm::class, $newUser);
		$registerForm->handleRequest($request);
		if($registerForm->isSubmitted()) {
			$newUser = $registerForm->getData();
			if($newUser->getPassword() != $registerForm['retype']->getData()) {
				$regError = 'Podane hasła różnią się!';
			}
			else {
				$existing = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('login' => $registerForm['login']->getData()));
			}
		}
		
		$user = new AppUser();
		$loginForm = $this->createForm(LoginForm::class, $user);
		$loginForm->handleRequest($request);
		if($loginForm->isSubmitted()) {
			//$user = $loginForm->getData();
		}
        return $this->render('default/login.html.twig', array('loginForm' => $loginForm->createView(),
															  'registerForm' => $registerForm->createView(),
															  'regError' => $regError));
    }
}
