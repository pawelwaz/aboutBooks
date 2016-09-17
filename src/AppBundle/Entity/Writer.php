<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Writer")
 */
class Writer {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	/**
	 * @Assert\NotBlank
	 * @ORM\Column(type="string", length=32)
	 */
	protected $name;
	/**
	 * @Assert\NotBlank
	 * @ORM\Column(type="string", length=32)
	 */
	protected $surname;
	/**
	 * @ORM\Column(type="text")
	 */
	protected $bio;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $moder;
	
	public function setId($newId) {
		$this->id = $newId;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setName($newName) {
		$this->name = $newName;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setSurname($newSurname) {
		$this->surname = $newSurname;
	}
	
	public function getSurname() {
		return $this->surname;
	}
	
	public function setBio($newBio) {
		$this->bio = $newBio;
	}
	
	public function getBio() {
		return $this->bio;
	}
	
	public function setModer($newModer) {
		$this->moder = $newModer;
	}
	
	public function getModer() {
		return $this->moder;
	}
	
	public function getFullName() {
		return $this->name.' '.$this->surname;
	}
}