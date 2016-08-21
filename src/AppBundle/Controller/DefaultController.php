<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\AppUser;
use AppBundle\Entity\AppUserExt;
use AppBundle\Form\LoginForm;
use AppBundle\Form\RegisterForm;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
	{
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		
        return $this->render('default/index.html.twig');
    }
	
	/**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
	{
		$session = $request->getSession();
		$session->clear();
		$regError = "";
		$regSuccess = "";
		$newUser = new AppUser();
		$registerForm = $this->createForm(RegisterForm::class, $newUser);
		$registerForm->handleRequest($request);
		if($registerForm->isSubmitted()) {
			$newUser = $registerForm->getData();
			if($newUser->getPassword() != md5($registerForm['retype']->getData())) {
				$regError = 'Podane hasła różnią się!';
			}
			else {
				$existing = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('login' => $registerForm['login']->getData()));
				if(!$existing) {
					$manager = $this->getDoctrine()->getManager();
					$manager->persist($newUser);
					$manager->flush();
					$regSuccess = "Konto zostało utworzone";
				}
				else {
					$regError = "Użytkownik o takim loginie już istnieje";
				}
			}
		}
		
		$loginError = "";
		$user = new AppUser();
		$loginForm = $this->createForm(LoginForm::class, $user);
		$loginForm->handleRequest($request);
		if($loginForm->isSubmitted()) {
			$user = $loginForm->getData();
			$check = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('login' => $user->getLogin(), 'password' => $user->getPassword()));
			if(!$check) {
				$loginError = "Błędne dane logowania";
			}
			else {
				$user->hidePassword();
				$session->set('userId', $user->getId());
				$session->set('login', $user->getLogin());
				return $this->redirectToRoute('homepage');
			}
		}
        return $this->render('default/login.html.twig', array('loginForm' => $loginForm->createView(),
															  'registerForm' => $registerForm->createView(),
															  'regError' => $regError,
															  'regSuccess' => $regSuccess,
															  'loginError' => $loginError));
    }
}
