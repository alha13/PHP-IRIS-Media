<?php
 require_once("../../config/connectbd.php");


if (isset($_GET['id'])) {
$id = $_GET["id"];
$sql = "UPDATE videos SET publie = 1 WHERE id_videos = '$id' ";
      $query = $bd->prepare($sql);
      $query->execute();

      header("location:afficher_vid.php?id=".$id);
}

?>