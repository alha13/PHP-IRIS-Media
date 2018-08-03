<?php 

	if(!empty($_GET["id"])){
             require_once("../../config/connectbd.php");
   

$id = $_GET["id"];


		$sql = "DELETE FROM annonces WHERE id_annonce = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
             
          )
       );


       header("location:annonce.php");
	   exit();
	}else{
		header("location:annonce.php");
		exit();
	}
?>