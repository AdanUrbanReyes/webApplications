<?php
	class Mysql{
		private $server="localhost";
		private $user="root";
		private $password="";
		private $dataBase="sale_ayan";
		private $connection;
		private $response;
		private $query;
		public function __construct(){
			$this->connection=mysql_connect($this->server,$this->user,$this->password);
			if(!$this->connection){
				echo "error connecting to mysql ".mysql_error();
			}
			if(!mysql_select_db($this->dataBase,$this->connection)){
				echo "error selecting dataBase $this->dataBase ".mysql_error();
			}
			return $this->connection;
		}
		public function update($update){
			if(!mysql_query($update,$this->connection)){
				echo "error in update ".mysql_error();
				return false;
			}
			return true;
		}
		public function query($query){
			$this->query=mysql_query($query,$this->connection);
			if(mysql_num_rows($this->query)==0){
				return false;
			}
			return $this->query;
		}
		public function closeConnection(){
			mysql_close();
		}
	}
?>
