<?php 

	if(!empty($_GET["id"])){
             require_once("../../config/connectbd.php");
   

$id = $_GET["id"];


		$sql = "DELETE FROM albums WHERE id_album = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
             
          )
       );


       header("location:album.php");
	   exit();
	}else{
		header("location:album.php");
		exit();
	}
?>