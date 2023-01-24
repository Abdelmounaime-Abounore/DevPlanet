<?php
include_once "admin.php";
include_once "Article.php";
include_once "conx.php";

$open_connexion=new conx();
session_start();
if (isset($_POST["action"])) {
	if($_POST["action"]=="login"){
		$email=$_POST["email"];
		$password=$_POST["password"];
		$user=new Admin(null,$email,$password);
		$rep=$user->login();
		if($rep==true){
			$_SESSION["id"]=$user->id;
			header('Location:../home.php');die;
		} 
		else { header('Location:../index.php?msg=user_existe_pas');die;}
	}

	if($_POST['action']=='update'){
		$id = $_POST['id'];
			$title = $_POST['title'];
			$category = $_POST['category'];
			$description = $_POST['description'];
		$article=new Article();
		$article->update($id,$title,$category,$description);
		header('Location: ../dashboard.php');	
		die;
	 }
}
if (isset($_GET["action"])) {

	if ($_GET["action"]=="delete_art") {
		$id=$_GET["id"];
		$article=new Article();
        $article->id=$id;
		$article->delete();
		header('Location:../dashboard.php?msg=The article has been successfully deleted!');
			die;
	}	
}

 ?>