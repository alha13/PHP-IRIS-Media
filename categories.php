<?php

require_once("config/connectbd.php");


if (isset($_GET['cat'])) {
$id = $_GET["cat"];
//echo $id .' " " ';
$sql2 = "SELECT *

FROM articles a, categorie c

WHERE a.id_categorie=$id AND $id =c.id_categorie AND 
a.publie_articles=1 ORDER BY id_articles DESC LIMIT 10";

$query2 = $bd->prepare($sql2);
$query2->execute(array("id" => $id));
/*$resultat = $query2->fetch();*/
} else {
      echo "ERROORR";
}


echo '<div class="row">';


while ($resultat = $query2->fetch()) {

  


echo ' <div class="thumbnail" style="height: a uto; width: 374px; margin-right: 25px; display:table; margin-left: 76px;">';
     echo ' <div class="single-news mb-lg-0 mb-4">';

      echo '  <!-- Image -->';
      echo '  <div class="view overlay rounded z-depth-1-half mb-4">';
       
         if  (!empty ($resultat['image_articles'])){ echo'<img class="img-fluid" src="'.$resultat['image_articles'].'" >';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       }

      
       echo '   <a>';
      echo '     <div class="mask rgba-white-slight"></div>';
       echo '   </a>';
       echo ' </div>';

       echo ' <!-- Data -->';
       echo ' <div class="news-data d-flex justify-content-between">';
        echo ' <!--  <a href="#!" class="deep-orange-text"><h6 class="font-weight-bold"><i class="fa fa-cutlery pr-2"></i>Culinary</h6></a> ;-->';
        echo '  <p class="font-weight-bold dark-grey-text"><i class="fa fa-clock-o pr-2"></i>'.$resultat['date_articles'].'</p>';
        echo '</div>';

        echo '<!-- Excerpt -->';
        echo '<h2 class="font-weight-bold dark-grey-text mb-3" align="center"><a style="color:  #FC6F20">'.$resultat['titre_articles'].'</a></h2>';

       
        echo '<p class="dark-grey-text mb-lg-0 mb-md-5 mb-4" style="text-align: center; size: 25px"><b>'.$resultat['description_articles'].'</b></p></br>';
         echo "<p align='center'><a href='index.php?id={$resultat['id_articles']}'class='btn btn-primary btn-block'>En savoir plus...</a> </p>";
      echo '</div>';
    echo '</div>';

     

}
?>

</div>


<!--/panel-->

<?php
if (isset($_GET['cat'])) {
$id = $_GET["cat"];
//echo $id .' " " ';
$sql2 = "SELECT *

FROM albums a, categorie c

WHERE a.id_categorie=$id AND $id =c.id_categorie AND 
a.publie_albums=1 ORDER BY id_album DESC LIMIT 10";

$query2 = $bd->prepare($sql2);
$query2->execute(array("id" => $id));
/*$resultat = $query2->fetch();*/
} else {
      echo "ERROORR";
}


echo '<div class="row">';


while ($resultat = $query2->fetch()) {

  


echo ' <div class="thumbnail" style="height: a uto; width: 374px; margin-right: 25px; display:table; margin-left: 76px;">';
     echo ' <div class="single-news mb-lg-0 mb-4">';

      echo '  <!-- Image -->';
      echo '  <div class="view overlay rounded z-depth-1-half mb-4">';
       
         if  (!empty ($resultat['photo_albums'])){ echo'<img class="img-fluid" src="'.$resultat['photo_albums'].'" >';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       }

      
       echo '   <a>';
      echo '     <div class="mask rgba-white-slight"></div>';
       echo '   </a>';
       echo ' </div>';

       echo ' <!-- Data -->';
       echo ' <div class="news-data d-flex justify-content-between">';
        echo ' <!--  <a href="#!" class="deep-orange-text"><h6 class="font-weight-bold"><i class="fa fa-cutlery pr-2"></i>Culinary</h6></a> ;-->';
        echo '  <p class="font-weight-bold dark-grey-text"><i class="fa fa-clock-o pr-2"></i>'.$resultat['date_albums'].'</p>';
        echo '</div>';

        echo '<!-- Excerpt -->';
        echo '<h2 class="font-weight-bold dark-grey-text mb-3" align="center"><a style="color:  #FC6F20">'.$resultat['titre_albums'].'</a></h2>';

       
        echo '<p class="dark-grey-text mb-lg-0 mb-md-5 mb-4" style="text-align: center; size: 25px"><b>'.$resultat['description_albums'].'</b></p></br>';
         echo "<p align='center'><a href='index.php?idal={$resultat['id_album']}'class='btn btn-primary btn-block'>En savoir plus...</a> </p>";
      echo '</div>';
    echo '</div>';
     

}
?>
</div>

<!--/panel-->

<?php
if (isset($_GET['cat'])) {
$id = $_GET["cat"];
//echo $id .' " " ';
$sql2 = "SELECT *

FROM videos a, categorie c

WHERE a.id_categorie=$id AND $id =c.id_categorie AND 
a.publie=1 ORDER BY id_videos DESC LIMIT 10";

$query2 = $bd->prepare($sql2);
$query2->execute(array("id" => $id));
/*$resultat = $query2->fetch();*/
} else {
      echo "ERROORR";
}


echo '<div class="row">';


while ($resultat = $query2->fetch()) {

  


echo ' <div class="thumbnail" style="height: a uto; width: 374px; margin-right: 25px; display:table; margin-left: 76px;">';
     echo ' <div class="single-news mb-lg-0 mb-4">';

      echo '  <!-- Image -->';
      echo '  <div class="view overlay rounded z-depth-1-half mb-4">';
       
         if  (!empty ($resultat['image_videos'])){ echo'<img class="img-fluid" src="'.$resultat['image_videos'].'" >';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       }

      
       echo '   <a>';
      echo '     <div class="mask rgba-white-slight"></div>';
       echo '   </a>';
       echo ' </div>';

       echo ' <!-- Data -->';
       echo ' <div class="news-data d-flex justify-content-between">';
        echo ' <!--  <a href="#!" class="deep-orange-text"><h6 class="font-weight-bold"><i class="fa fa-cutlery pr-2"></i>Culinary</h6></a> ;-->';
        echo '  <p class="font-weight-bold dark-grey-text"><i class="fa fa-clock-o pr-2"></i>'.$resultat['date_videos'].'</p>';
        echo '</div>';

        echo '<!-- Excerpt -->';
        echo '<h2 class="font-weight-bold dark-grey-text mb-3" align="center"><a style="color:  #FC6F20">'.$resultat['titre_videos'].'</a></h2>';

       
        echo '<p class="dark-grey-text mb-lg-0 mb-md-5 mb-4" style="text-align: center; size: 25px"><b>'.$resultat['description_videos'].'</b></p></br>';
         echo "<p align='center'><a href='index.php?idv={$resultat['id_videos']}'class='btn btn-primary btn-block'>En savoir plus...</a> </p>";
      echo '</div>';
    echo '</div>';
     

}
?>
</div>

<!--/panel-->

<?php
if (isset($_GET['cat'])) {
$id = $_GET["cat"];
//echo $id .' " " ';
$sql2 = "SELECT *

FROM audios a, categorie c

WHERE a.id_categorie=$id AND $id =c.id_categorie AND 
a.publie_audios=1 ORDER BY id_audios DESC LIMIT 10";

$query2 = $bd->prepare($sql2);
$query2->execute(array("id" => $id));
/*$resultat = $query2->fetch();*/
} else {
      echo "ERROORR";
}


echo '<div class="row">';


while ($resultat = $query2->fetch()) {

  


echo ' <div class="thumbnail" style="height: a uto; width: 374px; margin-right: 25px; display:table; margin-left: 76px;">';
     echo ' <div class="single-news mb-lg-0 mb-4">';

      echo '  <!-- Image -->';
      echo '  <div class="view overlay rounded z-depth-1-half mb-4">';
       
         if  (!empty ($resultat['image_audios'])){ echo'<img class="img-fluid" src="'.$resultat['image_audios'].'" >';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       }

      
       echo '   <a>';
      echo '     <div class="mask rgba-white-slight"></div>';
       echo '   </a>';
       echo ' </div>';

       echo ' <!-- Data -->';
       echo ' <div class="news-data d-flex justify-content-between">';
        echo ' <!--  <a href="#!" class="deep-orange-text"><h6 class="font-weight-bold"><i class="fa fa-cutlery pr-2"></i>Culinary</h6></a> ;-->';
        echo '  <p class="font-weight-bold dark-grey-text"><i class="fa fa-clock-o pr-2"></i>'.$resultat['date_audios'].'</p>';
        echo '</div>';

        echo '<!-- Excerpt -->';
        echo '<h2 class="font-weight-bold dark-grey-text mb-3" align="center"><a style="color:  #FC6F20">'.$resultat['titre_audios'].'</a></h2>';

       
        echo '<p class="dark-grey-text mb-lg-0 mb-md-5 mb-4" style="text-align: center; size: 25px"><b>'.$resultat['description_audios'].'</b></p></br>';
         echo "<p align='center'><a href='index.php?ida={$resultat['id_audios']}'class='btn btn-primary btn-block'>En savoir plus...</a> </p>";
      echo '</div>';
    echo '</div>';
     

}
?>
</div>