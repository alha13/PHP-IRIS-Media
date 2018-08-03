<?php 

	if(!empty($_GET["id"])){
             require_once("../../config/connectbd.php");
   

$id = $_GET["id"];


		$sql = "DELETE FROM videos WHERE id_videos = :id";
       $query = $bd->prepare($sql);
       $query->execute(
          array(
             'id' =>htmlspecialchars(trim($_GET["id"])) 
             
          )
       );


       header("location:video.php");
	   exit();
	}else{
		header("location:video.php");
		exit();
	}
?>