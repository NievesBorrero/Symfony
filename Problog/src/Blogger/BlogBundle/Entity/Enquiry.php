<?php
namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata; // Para añadir restricciones semánticas con php
use Symfony\Component\Validator\Constraints as Assert; // Para añadir restricciones semánticas


class Enquiry{
	/**
	 * @Assert\NotBlank()
	 */
	protected $name;
	/**
	 * @Assert\NotBlank()
	 * @Assert\Email(
	 * 		message = "El email '{{ value }}' es incorrecto",
	 * 		checkMX = true
	 * )
	 */
	protected $email;
	 /**
	* @Assert\NotBlank()
	* @Assert\Length(
	* min = 2,
	* max = 50,
	* minMessage = "El mínimo es {{ limit }} letras",
	* maxMessage = "No puedes escribir mas de {{ limit }} letras"
	* )
	*/
	protected $subject;
	/**
	* @Assert\NotBlank()
	* @Assert\Length(
	* min = 2,
	* minMessage = "El mínimo es {{ limit }} letras",
	* )
	*/
	protected $body;
	public function getName(){return $this->name;}
	public function setName($name){$this->name = $name;}
	public function getEmail(){return $this->email;}
	public function setEmail($email){$this->email = $email;}
	public function getSubject(){return $this->subject;}
	public function setSubject($subject){$this->subject = $subject;}
	public function getBody(){return $this->body;}
	public function setBody($body){$this->body = $body;}
}

?>