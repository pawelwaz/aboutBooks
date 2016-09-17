<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="BookComment")
 */
class BookComment {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	/**
	 * @ORM\Column(type="text")
	 */
	protected $content;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $book;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $user;
	
	public function setId($newId) {
		$this->id = $newId;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setContent($newContent) {
		$this->content = $newContent;
	}
	
	public function getContent() {
		return $this->content;
	}
	
	public function setBook($newBook) {
		$this->book = $newBook;
	}
	
	public function getBook() {
		return $this->book;
	}
	
	public function setUser($newUser) {
		$this->user = $newUser;
	}
	
	public function getUser() {
		return $this->user;
	}

}