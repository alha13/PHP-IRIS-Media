<?php 

	if(!empty($_GET["id"])){
             require_once("../../config/connectbd.php");
   

$id = $_GET["id"];


		$sql = "DELETE FROM articles WHERE id_articles = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
             
          )
       );


       header("location:article.php");
	   exit();
	}else{
		header("location:article.php");
		exit();
	}
?>