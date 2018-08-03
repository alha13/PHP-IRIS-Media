<?php
 require_once("../../config/connectbd.php");


if (isset($_GET['id'])) {
$id = $_GET["id"];
$sql = "UPDATE audios SET publie_audios = 0 WHERE id_audios = '$id' ";
      $query = $bd->prepare($sql);
      $query->execute();

      header("location:afficher_au.php?id=".$id);
}

?>