    

    <?php

require_once("config/connectbd.php");

 ?>


 <?php
    $sql2 = "SELECT * FROM articles  WHERE publie_articles = '1' AND id_categorie = 1 ORDER BY id_articles DESC LIMIT 5 ";
     $query2 = $bd->query($sql2);
//$query2 = $bd->prepare($sql2);
//$query2->execute();
//$resultat = $query2->fetch();
 while ($row = $query2->fetch()) {

     echo  $row['titre_articles'];
     echo "<hr>";
     


    }

    ?>  