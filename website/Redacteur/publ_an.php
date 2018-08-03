<?php
 require_once("../../config/connectbd.php");


if (isset($_GET['id'])) {
$id = $_GET["id"];
$sql = "UPDATE annonces SET publie_annonce = 1 WHERE id_annonce = '$id' ";
      $query = $bd->prepare($sql);
      $query->execute();

      header("location:afficher_an.php?id=".$id);
}

?>