<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="AppUser")
 */
class AppUser {
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
	protected $login;
	/**
	 * @Assert\NotBlank
	 * @ORM\Column(type="string", length=32)
	 */
	protected $password;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $creds;
	
	public function setPassword($newPassword) {
		$this->password = $newPassword;
		$this->hashPassword();
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($newId) {
		$this->id = $newId;
	}
	
	public function getLogin() {
		return $this->login;
	}
	
	public function setLogin($newLogin) {
		$this->login = $newLogin;
	}
	
	public function hidePassword() {
		$this->password = "";
	}
	
	public function hashPassword() {
		$this->password = md5($this->password);
	}
	
	public function setCreds($newCreds) {
		$this->creds = $newCreds;
	}
	
	public function getCreds() {
		return $this->creds;
	}
}
