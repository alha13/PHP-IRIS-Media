
<?php


require_once("config/connectbd.php");

   
 

?>

<?php 

if (isset($_GET['idv'])) {
$id = $_GET["idv"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM videos t1, categorie t2 where t1.id_videos = $id and t1.id_categorie=t2.id_categorie";
$query2 = $bd->prepare($sql2);
$query2->execute(array("idv" => $id));
$resultat = $query2->fetch();
} else {
      echo "ERROORR";
}

?>
      
                <div class="col-lg-10" id="content">
                    <div class="card rounded-0 border-right-0 border-left-0">
                      
                        <div class="card-body rounded-10">
                            <div class="row">
                                <!--/panel-->
                                <!--/end right column-->
                                <div class="container">
                                    <h2 style="color: #FC6F20"; align="center"><?php echo $resultat['titre_videos'] ?> </h2>
                                    <hr>
                                </div>
                            <div class="container col-lg-11">
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                     <?php echo '<iframe width="560" height="315" src="'.$resultat['link_videos'].' " frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';?>

                                    </div>
                                </div>
                                <div class="container col-lg-11">
                                     <hr>
                                    <p class="textdate" style="color: #1830d9"> <b>Gatégorie: </b> <?php echo strtoupper($resultat['libele_categorie']) ?></p>
                                    <p class="textdate"><b>Date:  </b> <?php echo $resultat['date_videos'] ?></p>
                                    <p class="textsource"> <b>Sources: </b><?php echo $resultat['sources_videos'] ?></p>
                                    <hr>


                                    <!-- descrition -->
                                    <h3> <?php echo $resultat['description_videos'] ?></h3>
                                </div>
                                <div class="container col-lg-11">
                                    <!-- texte -->
                                    <p style="left: 8px;"><?php //echo $resultat['texte_articles'] ?></p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container col-lg-10">
                                    <div class="col-md-10 col-lg-8" style="left: 75px;" id="commentaire" data-pg-name="commentaire">
                                        <h2 class="page-header">Comments</h2>

                                       <!--  pour le commentaire -->
<?php
date_default_timezone_set('UTC');

if (!empty($_POST["commenter"]) ) {



           // $categorie = htmlspecialchars(trim($_POST["categorie"]));
            $nom = htmlspecialchars(trim($_POST["nom"]));
            $commentaire = htmlspecialchars(trim($_POST["commentaire"]));
            $date = date("Y-m-d H:i:s");
           $id = $_GET["idv"];
       

      
    $sql = "INSERT INTO  comment_videos(nom_comment_videos, com_comment_videos, date_comment_videos, id_videos) VALUES(?,?,?,?)";
    $query = $bd->prepare($sql);
    $query->execute(array(
            $nom, $commentaire, $date, $id

        ));
      }

?>

                                        <!-- First Comment -->
                                        <form action="" method="post" style="margin-bottom: 22px;">
                                            <div class="form-group">
                                                <label for="email">Nom:</label>
                                                <input type="text" class="form-control" id="email" placeholder="Entrer votre nom" name="nom" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="comment">Comment:</label>
                                                <textarea name="commentaire" class="form-control" rows="5" id="comment" required=""></textarea>
                                            </div>
                                            <input type="submit" name="commenter" class="btn btn-default" value="Commenter !">
                                        </form>
                                        <hr>
                                        <div class="row">
                                           
                <?php
   /*   $sql = "SELECT * FROM articles t1, comment_articles t2  where t2.id_articles = t1.id_articles  ORDER BY id_comment_articles DESC ";
     $query = $bd->query($sql);
    $query = $bd->prepare($sql);
    $query->execute();

$resultat2 = $query->fetch(); */



if (isset($_GET['idv'])) {
$id = $_GET["idv"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM videos t1, comment_videos t2  where t2.id_videos = t1.id_videos and t1.id_videos = $id ORDER BY id_comment_videos DESC";

   $query2 = $bd->query($sql2);
   // $query2 = $bd->prepare($sql2);
    //$query2->execute();
/*$resultat = $query2->fetch(); */

/*$query2 = $bd->prepare($sql2);*/
$query2->execute(array("idv" => $id));
/*$resultat2 = $query2->fetch();*/
}



                       while ($row = $query2->fetch()) {
                                       echo '  <div class="container">';

                                        echo '<h4>' .$row['nom_comment_videos'].' </h4>';
                                               echo' <p>'.$row['com_comment_videos'].'</p>';
                                               echo ' <p align="right"><b>DATE: </b>'. $row['date_comment_videos'].'</p>';
                                              echo'  <hr>';
                                           echo ' </div>';
                                        }

 ?>  


                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  

