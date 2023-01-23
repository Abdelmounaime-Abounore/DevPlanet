<?php 
/**
 * 
 */
include_once 'conx.php';

class Admin
{
	public $id;
	public $name;
	public $email;
	public $password;

	function __construct($name="null",$email="null",$password="null")
	{
		$this->name=$name;
		$this->email=$email;
		$this->password=$password;
	}

	public function fetchaArray($result){
		$rows = array();
		while($row = $result->fetch_assoc()) {
    		$rows[] = $row;
  		}
  		return $rows;
	}
	public function insert(){
		$res = conx::$pdo->query('INSERT INTO admin(name,email,password) values("'.$this->name.'","'.$this->email.'","'.$this->password.'") ');
		return $res;
	}
	public function delete(){
		$res=conx::$pdo->query("DELETE FROM admin where id='".$this->id."' ");
		return $res;
	}
	public function getAdmins(){
		$rech=conx::$pdo->query("select * from admin");
    	$tab=$this->fetchaArray($rech);
    	if(count($tab)<1) return false;
    	return $tab;
	}
	
	public function login(){
		$rech = conx::$pdo->query("select * from admin where email='".$this->email."' AND password='".$this->password."' ");
    	$tab = $this->fetchaArray($rech);
    	if(count($tab)<1) return false;	
    	$this->id = $tab[0]["id"];
    	return true;
	}
}
 ?>