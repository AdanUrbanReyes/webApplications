<?php
	class Boss{
		private $name;
		private $surname;
		private $email;
		private $password;
		public function __construct($name,$surname,$email,$password){
			$this->name=$name;
			$this->surname=$surname;
			$this->email=$email;
			$this->password=$password;
		}
		public function __destruct(){
			echo "boss detroied $this->name";
		}
		public function getName(){
			return $this->name;
		}
		public function getSurname(){
			return $this->surname;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setName($name){
			$this->name=$name;
		}
		public function setSurname($surname){
			$this->surname=$surname;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setPassword($password){
			$this->password=$password;
		}
	}
?>
