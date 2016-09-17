<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="Genre")
 */
class Genre {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	/**
	 * @ORM\Column(type="text")
	 */
	protected $name;
	
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

}