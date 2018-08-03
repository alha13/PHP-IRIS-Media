<?php 

	if(!empty($_GET["id"])){
             require_once("../../config/connectbd.php");
   

$id = $_GET["id"];


		$sql = "DELETE FROM audios WHERE id_audios = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
             
          )
       );


       header("location:audio.php");
	   exit();
	}else{
		header("location:audio.php");
		exit();
	}
?>