<?php
 require_once("../../config/connectbd.php");


if (isset($_GET['id'])) {
$id = $_GET["id"];
$sql = "UPDATE albums SET publie_albums = 0 WHERE id_album = '$id' ";
      $query = $bd->prepare($sql);
      $query->execute();

      header("location:afficher_al.php?id=".$id);
}

?>