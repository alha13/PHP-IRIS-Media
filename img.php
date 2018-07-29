    

    <?php

require_once("config/connectbd.php");

 ?>


 <?php
    $sql2 = "SELECT * FROM articles  WHERE publie_articles = '1' AND id_categorie = 1 ORDER BY id_articles DESC LIMIT 5 ";

     $query2 = $bd->query($sql2);
         var_dump($query2 = $query2->fetch());

/* while ($row = $query2->fetch()) {

     echo  $row['titre_articles'];
     echo "<hr>";
     


    }*/
$query = $bd->query("SELECT * FROM categorie")->fetch();
                                  foreach ($value = $query  ) {
                                   echo' <a href="index.php?cat='.$value[0].'" class="nav-link text-purple px-0" style="background-color: #babbbc; color: #ffffff; text-align: center; margin-bottom: 5px;"><b>' .strtoupper($value[1] ).'</b></a>';
                                   //echo "<hr>";
                                    }
    ?>  