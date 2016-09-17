<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Book")
 */
class Book {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	/**
     * @ORM\Column(type="text")
     */
	protected $title;
	/**
     * @ORM\Column(type="integer")
     */
	protected $writer;
	/**
     * @ORM\Column(type="text")
     */
	protected $description;
	/**
     * @ORM\Column(type="integer")
     */
	protected $genre;
	/**
     * @ORM\Column(type="integer")
     */
	protected $moder;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($newId) {
		$this->id = $newId;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function setTitle($newTitle) {
		$this->title = $newTitle;
	}
	
	public function getWriter() {
		return $this->writer;
	}
	
	public function setWriter($newWriter) {
		$this->writer = $newWriter;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($newDesc) {
		$this->description = $newDesc;
	}
	
	public function getGenre() {
		return $this->genre;
	}
	
	public function setGenre($newGenre) {
		$this->genre = $newGenre;
	}
	
	public function setModer($newModer) {
		$this->moder = $newModer;
	}
	
	public function getModer() {
		return $this->moder;
	}
}