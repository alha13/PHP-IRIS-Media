

<?php

require_once("config/connectbd.php");

   
    $sql1 = "SELECT * FROM annonces  where publie_annonce = 1  ORDER BY id_annonce DESC LIMIT 10 ";
     $query1 = $bd->query($sql1);
   // $query2 = $bd->prepare($sql2);
    //$query2->execute();

//$resultat = $query2->fetch(); 
echo '<div class="row">';
while ($resultat1 = $query1->fetch()) {

   echo '<!--/card-body-->';
   
echo '<div class="" style="width: 340px; margin-right: 25px; margin-left: 76px;">';
  echo '<div class="col-md-12">';
     echo '<div class="card mb-4 shadow-sm" style="background-color:#dee2e6">';
   echo '<img class="img-fluid" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="';

/*
   if  (!empty ($resultat['image_articles'])){ echo'<img class="img-fluid" src="'.$resultat['image_articles'].'" >';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       }*/

   if  (!empty ($resultat['image_articles'])){  echo '<humbnail [100%x225]" style="height: 225px; width: auto; display: block;" src="'. $resultat1['image_annonce'] .'"data-holder-rendered="true">';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       }









echo '<div class="card-body">';

echo '<h3>'. $resultat1['titre_annonce'] .'</h3>';

echo'<hr>';


 echo '<p style="size: 14px">'. $resultat1['texte_annonce'] .' </p>';


                 echo '<hr>';
                   echo ' <h4>'. $resultat1['contact_annonce'] .'</h4 >';
                 //echo '<h4>+225 48897043</h4 >';
                 echo ' <hr>';
               echo '<div class="">';
           echo ' <div style="text-align:left">';
                  echo ' <p><b>Annonceur:</b> '. $resultat1['annonceur_annonce'] .'</p>';

             echo '   </div>';
             echo '   <small style="align: right;"><b>Date:</b> '. $resultat1['date_annonce'] .'</small>';
              echo '  </div>';
         echo '  </div>';
              echo '      </div>';
                echo '</div>';
      echo ' </div>';



echo '<!--/panel-->';


}
echo '</div>';
 ?>



