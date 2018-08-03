<?php
 require_once("../../config/connectbd.php");


if (isset($_GET['id'])) {
$id = $_GET["id"];
$sql = "UPDATE articles SET publie_articles = 1 WHERE id_articles = '$id' ";
      $query = $bd->prepare($sql);
      $query->execute();

      header("location:afficher_art.php?id=".$id);
}

?>