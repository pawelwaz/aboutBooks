<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\AppUser;
use AppBundle\Entity\WriterComment;
use AppBundle\Entity\BookComment;
use AppBundle\Entity\Genre;
use AppBundle\Entity\Book;
use AppBundle\Entity\AppUserExt;
use AppBundle\Entity\Writer;
use AppBundle\Form\LoginForm;
use AppBundle\Form\RegisterForm;
use AppBundle\Form\LoginChangeForm;
use AppBundle\Form\PasswordChangeForm;
use AppBundle\Form\UserEditForm;
use AppBundle\Form\WriterForm;
use AppBundle\Form\CommentForm;
use AppBundle\Form\BookForm;
use AppBundle\Form\BookSearchForm;
use AppBundle\Form\GenreForm;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
	{
		return $this->redirectToRoute("books");
    }
	
	/**
	 * @Route("/settings", name="settings")
	 */
	public function settingsAction(Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$loginChangeError = "";
		$loginChangeSuccess = "";
		$passwordChangeError = "";
		$passwordChangeSuccess = "";
		$loginChangeForm = $this->createForm(LoginChangeForm::class);
		$loginChangeForm->handleRequest($request);
		if($loginChangeForm->isSubmitted()) {
			$existing = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('login' => $loginChangeForm['login']->getData()));
			if(!$existing) {
				$user = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('id' => $session->get('userId')));
				$manager = $this->getDoctrine()->getManager();
				$user->setLogin($loginChangeForm['login']->getData());
				$manager->persist($user);
				$manager->flush();
				$session->set('login', $user->getLogin());
				$loginChangeSuccess = "login został zmieniony";
			}
			else {
				$loginChangeError = "login jest już zajęty";
			}
		}
		$passwordChangeForm = $this->createForm(PasswordChangeForm::class);
		$passwordChangeForm->handleRequest($request);
		if($passwordChangeForm->isSubmitted()) {
			$session = $request->getSession();
			$check = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('login' => $session->get('login'), 'password' => md5($passwordChangeForm['old']->getData())));
			if(!$check) {
				$passwordChangeError = "błędne stare hasło";
			}
			else {
				if($passwordChangeForm['new']->getData() != $passwordChangeForm['retype']->getData()) {
					$passwordChangeError = "nowe hasło nie zostało powtórzone poprawnie";
				}
				else {
					$user = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('id' => $session->get('userId')));
					$user->setPassword($passwordChangeForm['new']->getData());
					$manager = $this->getDoctrine()->getManager();
					$manager->persist($user);
					$manager->flush();
					$passwordChangeSuccess = "hasło zostało zmienione";
				}
			}
		}
		return $this->render('default/settings.html.twig', array('loginChangeForm' => $loginChangeForm->createView(),
															  'loginChangeError' => $loginChangeError,
															  'loginChangeSuccess' => $loginChangeSuccess,
															  'passwordChangeForm' => $passwordChangeForm->createView(),
															  'passwordChangeError' => $passwordChangeError,
															  'passwordChangeSuccess' => $passwordChangeSuccess));
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
					$newUser->setCreds(0);
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
				$check->hidePassword();
				$session->set('userId', $check->getId());
				$session->set('login', $check->getLogin());
				$session->set('creds', $check->getCreds());
				return $this->redirectToRoute('homepage');
			}
		}
        return $this->render('default/login.html.twig', array('loginForm' => $loginForm->createView(),
															  'registerForm' => $registerForm->createView(),
															  'regError' => $regError,
															  'regSuccess' => $regSuccess,
															  'loginError' => $loginError));
    }
	
	/**
	 * @Route("/users", name="users")
	 */
	public function usersAction(Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId')) or $session->get('creds') == 0) {
			return $this->redirectToRoute('login');
		}
		$users = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findAll();
		return $this->render('default/users.html.twig', array('users' => $users));
	}
	
	/**
	 * @Route("/useredit/{id}", name="useredit")
	 */
	public function usereditAction($id, Request $request) {
		$editSuccess = "";
		$editError = "";
		$session = $request->getSession();
		if(!($session->has('userId')) or $session->get('creds') == 0) {
			return $this->redirectToRoute('login');
		}
		$user = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('id' => $id));
		$userEditForm = $this->createForm(UserEditForm::class, $user);
		$userEditForm->handleRequest($request);
		if($userEditForm->isSubmitted()) {
			$user = $userEditForm->getData();
			$check = $this->getDoctrine()->getRepository('AppBundle:AppUser')->findOneBy(array('login' => $user->getLogin()));
			if(!$check) {
				$manager = $this->getDoctrine()->getManager();
				$manager->persist($user);
				$manager->flush();
				$editSuccess = "dane zostały zapisane";
			}
			else if($user->getId() != $check->getId()) {
				$editError = "wybrany login jest już zajęty";
			}
			else {
				$manager = $this->getDoctrine()->getManager();
				$manager->persist($user);
				$manager->flush();
				$editSuccess = "dane zostały zapisane";
			}
		}
		$passwordChangeForm = $this->createForm(PasswordChangeForm::class);
		$passwordChangeForm->handleRequest($request);
		if($passwordChangeForm->isSubmitted()) {
			if($passwordChangeForm['new']->getData() != $passwordChangeForm['retype']->getData()) {
				$editError = "wpisane hasła różnią się";
			}
			else {
				$user->setPassword($passwordChangeForm['new']->getData());
				$manager = $this->getDoctrine()->getManager();
				$manager->persist($user);
				$manager->flush();
				$editSuccess = "hasło zostało zmienione";
			}
		}
		return $this->render('default/useredit.html.twig', array('UserEditForm' => $userEditForm->createView(),
																 'PasswordChangeForm' => $passwordChangeForm->createView(),
																 'editSuccess' => $editSuccess,
																 'editError' => $editError));
	}
	
	/**
	 * @Route("/writers", name="writers")
	 */
	public function writersAction(Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$searchData = array();
		$saveSuccess = "";
		if($request->query->has('saveSuccess')) {
			$saveSuccess = "pisarz został dodany do bazy";
		}
		$writer = new Writer();
		$searchForm = $this->createForm(WriterForm::class, $writer);
		$searchForm->handleRequest($request);
		if($searchForm->isSubmitted()) {
			$writer = $searchForm->getData();
			if($writer->getName() != "") $searchData['name'] = $writer->getName();
			if($writer->getSurname() != "") $searchData['surname'] = $writer->getSurname();
		}
		$writers = null;
		$repo = $this->getDoctrine()->getRepository('AppBundle:Writer');
		if(count($searchData) > 0) $writers = $repo->findBy($searchData);
		else $writers = $repo->findAll();
		return $this->render('default/writers.html.twig', array('saveSuccess' => $saveSuccess,
																'searchForm' => $searchForm->createView(),
																'writers' => $writers));
	}
	
	/**
	 * @Route("/writer/{id}", name="writeredit")
	 */
	public function writerEditAction($id, Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$saveError = "";
		$saveSuccess = "";
		$writer = $this->getDoctrine()->getRepository('AppBundle:Writer')->findOneBy(array('id' => $id));
		if(!$writer) return $this->redirect($this->generateUrl('writers'));
		else if($session->get('creds') != 1) {
			if($writer->getModer() != $session->get('userId')) return $this->redirect($this->generateUrl('writers'));
		}
		$writerForm = $this->createForm(WriterForm::class, $writer);
		$writerForm->handleRequest($request);
		if($writerForm->isSubmitted()) {
			$writer = $writerForm->getData();
			$writer->setModer($session->get('userId'));
			$manager = $this->getDoctrine()->getManager();
			$manager->persist($writer);
			$manager->flush();
			$saveSuccess = "dane zostały zapisane";
		}
		return $this->render('default/writer.html.twig', array('saveError' => $saveError,
															   'saveSuccess' => $saveSuccess,
															   'header' => 'edycja profilu autora',
															   'writerForm' => $writerForm->createView()));
	}
	
	/**
	 * @Route("/writer", name="writer")
	 */
	public function writerAction(Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$saveError = "";
		$writer = new Writer();
		$writerForm = $this->createForm(WriterForm::Class, $writer);
		$writerForm->handleRequest($request);
		if($writerForm->isSubmitted()) {
			$check = $this->getDoctrine()->getRepository('AppBundle:Writer')->findOneBy(array('name' => $writer->getName(), 'surname' => $writer->getSurname()));
			if(!$check) {
				$writer = $writerForm->getData();
				$writer->setModer($session->get('userId'));
				$manager = $this->getDoctrine()->getManager();
				$manager->persist($writer);
				$manager->flush();
				return $this->redirect($this->generateUrl('writers', array('saveSuccess' => 'success')));
			}
			else {
				$saveError = "autor o takich danych już istnieje w bazie";
			}
		}
		return $this->render('default/writer.html.twig', array('header' => "dodawanie pisarza do bazy",
															   'saveError' => $saveError,
															   'saveSuccess' => "",
															   'writerForm' => $writerForm->createView()));
	}
	
	/**
	 * @Route("/writerdetails/{id}", name="writerdetails")
	 */
	public function writerDetailsAction($id, Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId')) or $session->get('creds') == 0) {
			return $this->redirectToRoute('login');
		}
		$saveSuccess = "";
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$writer = $this->getDoctrine()->getRepository('AppBundle:Writer')->findOneBy(array('id' => $id));
		$comment = new WriterComment();
		$commentForm = $this->createForm(CommentForm::class, $comment);
		$commentForm->handleRequest($request);
		if($commentForm->isSubmitted()) {
			$comment = $commentForm->getData();
			$comment->setWriter($id);
			$comment->setUser($session->get('userId'));
			$manager = $this->getDoctrine()->getManager();
			$manager->persist($comment);
			$manager->flush();
			$saveSuccess = "dodałeś komentarz";
		}
		$manager = $this->getDoctrine()->getManager();
		$builder = $manager->createQueryBuilder();
		$builder->select(array('c.content', 'u.login'))
				->from('AppBundle:WriterComment', 'c')
				->join('AppBundle:AppUser', 'u', 'WITH', 'u.id = c.user')
				->where('c.writer = '.$id);
		$comments = $builder->getQuery()->getResult();
		$books = $this->getDoctrine()->getRepository('AppBundle:Book')->findBy(array('writer' => $id));
		return $this->render('default/writer.details.html.twig', array('writer' => $writer,
																	   'commentForm' => $commentForm->createView(),
																	   'saveSuccess' => $saveSuccess,
																	   'comments' => $comments,
																	   'books' => $books));
	}
	
	/**
	 * @Route("/genres", name="genres")
	 */
	public function genresAction(Request $request) {
		$saveError = "";
		$saveSucces = "";
		$genre = new Genre();
		$genreForm = $this->createForm(GenreForm::class, $genre);
		$genreForm->handleRequest($request);
		if($genreForm->isSubmitted()) {
			$genre = $genreForm->getData();
			$check = $this->getDoctrine()->getRepository('AppBundle:Genre')->findOneBy(array('name' => $genre->getName()));
			if(!$check) {
				$manager = $this->getDoctrine()->getManager();
				$manager->persist($genre);
				$manager->flush();
				$saveSucces = "dodano gatunek do bazy";
			}
			else {
				$saveError = "gatunek o takiej nazwie już istnieje w bazie";
			}
		}
		$genres = $this->getDoctrine()->getRepository('AppBundle:Genre')->findAll();
		return $this->render('default/genres.html.twig', array('header' => 'dodaj gatunek',
															   'saveError' => $saveError,
															   'saveSuccess' => $saveSucces,
															   'genreForm' => $genreForm->createView(),
															   'genres' => $genres));
	}
	
	/**
	 * @Route("/genres/{id}", name="genresEdit")
	 */
	public function genresEditAction($id, Request $request) {
		$saveError = "";
		$saveSucces = "";
		$genre = $this->getDoctrine()->getRepository('AppBundle:Genre')->findOneBy(array('id' => $id));
		$tmpName = $genre->getName();
		$genreForm = $this->createForm(GenreForm::class, $genre);
		$genreForm->handleRequest($request);
		if($genreForm->isSubmitted()) {
			$genre = $genreForm->getData();
			if($tmpName != $genre->getName()) {
				$check = $this->getDoctrine()->getRepository('AppBundle:Genre')->findOneBy(array('name' => $genre->getName()));
				if(!$check) {
					$manager = $this->getDoctrine()->getManager();
					$manager->persist($genre);
					$manager->flush();
					return $this->redirectToRoute('genres');
				}
				else {
					$saveError = "wybrana nazwa już jest zajęta";
				}
			}
		}
		$genres = $this->getDoctrine()->getRepository('AppBundle:Genre')->findAll();
		return $this->render('default/genres.html.twig', array('header' => 'edytuj gatunek',
															   'saveError' => $saveError,
															   'saveSuccess' => $saveSucces,
															   'genreForm' => $genreForm->createView(),
															   'genres' => $genres));
	}
	
	/**
	 * @Route("/books", name="books")
	 */
	public function booksAction(Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$saveSuccess = "";
		if($request->query->has('save')) {
			$saveSuccess = "dane zostały zapisane";
		}
		$searchForm = $this->createForm(BookSearchForm::class);
		$searchForm->handleRequest($request);
		$manager = $this->getDoctrine()->getManager();
		$builder = $manager->createQueryBuilder();
		$builder->select(array('b.id', 'b.title', 'w.name as writername', 'w.surname', 'g.name as genrename'))
				->from('AppBundle:Book', 'b')
				->join('AppBundle:Writer', 'w', 'WITH', 'w.id = b.writer')
				->join('AppBundle:Genre', 'g', 'WITH', 'g.id = b.genre');
		$where = null;
		if($searchForm->isSubmitted()) {
			if($searchForm['title']->getData() != "") {
				if($where == null) $where = $builder->expr()->eq('b.title', "'".$searchForm['title']->getData()."'");
				else $where = $builder->expr()->andX($where, $builder->expr()->eq('b.title', "'".$searchForm['title']->getData()."'"));
			}
			if($searchForm['writername']->getData() != "") {
				if($where == null) $where = $builder->expr()->eq('w.name', "'".$searchForm['writername']->getData()."'");
				else $where = $builder->expr()->andX($where, $builder->expr()->eq('w.name', "'".$searchForm['writername']->getData()."'"));
			}
			if($searchForm['writersurname']->getData() != "") {
				if($where == null) $where = $builder->expr()->eq('w.surname', "'".$searchForm['writersurname']->getData()."'");
				else $where = $builder->expr()->andX($where, $builder->expr()->eq('w.surname', "'".$searchForm['writersurname']->getData()."'"));
			}
			if($searchForm['genre']->getData() != "") {
				if($where == null) $where = $builder->expr()->eq('g.name', "'".$searchForm['genre']->getData()."'");
				else $where = $builder->expr()->andX($where, $builder->expr()->eq('g.name', "'".$searchForm['genre']->getData()."'"));
			}
		}
		if($where != null) {
			$builder->add('where', $where);
		}
		$books = $builder->getQuery()->getResult();
		return $this->render('default/books.html.twig', array('saveSuccess' => $saveSuccess,
															  'books' => $books,
															  'searchForm' => $searchForm->createView()));
	}
	
	/**
	 * @Route("/bookedit/{id}", name="bookedit")
	 */
	public function bookEditAction($id, Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$book = $this->getDoctrine()->getRepository('AppBundle:Book')->findOneBy(array('id' => $id));
		$bookForm = $this->createForm(BookForm::class, $book);
		$bookForm->handleRequest($request);
		if($bookForm->isSubmitted()) {
			$book = $bookForm->getData();
			$book->setModer($session->get('userId'));
			$book->setWriter($book->getWriter()->getId());
			$book->setGenre($book->getGenre()->getId());
			$manager = $this->getDoctrine()->getManager();
			$manager->persist($book);
			$manager->flush();
			return $this->redirect($this->generateUrl('books', array('save' => 'success')));
		}
		return $this->render('default/bookedit.html.twig', array('header' => 'edycja książki',
																 'bookForm' => $bookForm->createView()));
	}
	
	/**
	 * @Route("/bookedit", name="book")
	 */
	public function bookAction(Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$book = new Book();
		$bookForm = $this->createForm(BookForm::Class, $book);
		$bookForm->handleRequest($request);
		if($bookForm->isSubmitted()) {
			$book = $bookForm->getData();
			$book->setWriter($book->getWriter()->getId());
			$book->setGenre($book->getGenre()->getId());
			$book->setModer($session->get('userId'));
			$manager = $this->getDoctrine()->getManager();
			$manager->persist($book);
			$manager->flush();
			return $this->redirect($this->generateUrl('books', array('save' => 'success')));
		}
		return $this->render('default/bookedit.html.twig', array('header' => "dodawanie książki do bazy",
																 'bookForm' => $bookForm->createView()));
	}
	
	/**
	 * @Route("/bookdetails/{id}", name="bookdetails")
	 */
	public function bookDetailsAction($id, Request $request) {
		$session = $request->getSession();
		if(!($session->has('userId'))) {
			return $this->redirectToRoute('login');
		}
		$saveSuccess = "";
		$comment = new BookComment();
		$commentForm = $this->createForm(CommentForm::class, $comment);
		$commentForm->handleRequest($request);
		if($commentForm->isSubmitted()) {
			$comment = $commentForm->getData();
			$comment->setUser($session->get('userId'));
			$comment->setBook($id);
			$manager = $this->getDoctrine()->getManager();
			$manager->persist($comment);
			$manager->flush();
			$saveSuccess = "dodałeś komentarz";
		}
		$manager = $this->getDoctrine()->getManager();
		$builder = $manager->createQueryBuilder();
		$builder->select(array('c.content', 'u.login'))
				->from('AppBundle:BookComment', 'c')
				->join('AppBundle:AppUser', 'u', 'WITH', 'u.id = c.user')
				->where('c.book = '.$id);
		$comments = $builder->getQuery()->getResult();
		$book = $this->getDoctrine()->getRepository('AppBundle:Book')->findOneBy(array('id' => $id));
		$writer = $this->getDoctrine()->getRepository('AppBundle:Writer')->findOneBy(array('id' => $book->getWriter()));
		$genre = $this->getDoctrine()->getRepository('AppBundle:Genre')->findOneBy(array('id' => $book->getGenre()));
		return $this->render('default/book.details.html.twig', array('book' => $book,
																	 'writer' => $writer,
																	 'genre' => $genre,
																	 'saveSuccess' => $saveSuccess,
																	 'commentForm' => $commentForm->createView(),
																	 'comments' => $comments));
	}
	
}
