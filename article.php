
<?php


require_once("config/connectbd.php");

   
 

?>

<?php 

if (isset($_GET['id'])) {
$id = $_GET["id"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM articles t1, categorie t2 where t1.id_articles = $id and t1.id_categorie=t2.id_categorie ";
$query2 = $bd->prepare($sql2);
$query2->execute(array("id" => $id));
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
                                    <h2 style="color: #FC6F20"; align="center"><?php echo $resultat['titre_articles'] ?> </h2>
                                    <hr>
                                </div>
                                <div class="container col-lg-11">
                                    <!-- image -->
                    <?php if  (!empty ($resultat['image_articles'])){ echo '<img src="'. $resultat['image_articles'] .'" style="height: 400px; widht: 600px; text-align: center; margin-left: 38px;" class="img-fluid text-center">';
       
       }else {
        echo '<img class="img-fluid" src="upload/default.png" >';
         //echo 'src="update/d.png"} ';
       } ?>

                                   
                                    <hr>
                                </div>
                                <div class="container col-lg-11">
                                    <p class="textdate" style="color: #1830d9"> <b>Gatégorie: </b> <?php echo strtoupper($resultat['libele_categorie']) ?></p>
                                    <p class="textdate"><b>Date:  </b> <?php echo $resultat['date_articles'] ?></p>
                                    <p class="textsource"> <b>Sources: </b><?php echo $resultat['source_articles'] ?></p>
                                    <hr>


                                    <!-- descrition -->
                                    <h3> <?php echo $resultat['description_articles'] ?></h3>
                                </div>
                                <div class="container col-lg-11">
                                    <!-- texte -->
                                    <p style="left: 8px;"><?php echo $resultat['texte_articles'] ?></p>
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
           $id = $_GET["id"];
       

      
    $sql = "INSERT INTO  comment_articles(nom_comment_articles, com_comment_articles, date_comment_articles, id_articles) VALUES(?,?,?,?)";
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
                                                <textarea name="commentaire" class="form-control" rows="5" id="comment"></textarea>
                                            </div>
                                            <input type="submit" name="commenter" class="btn btn-default" value="Commenter !" required="">
                                        </form>
                                        <hr>
                                        <div class="row">
                                           
                <?php
   /*   $sql = "SELECT * FROM articles t1, comment_articles t2  where t2.id_articles = t1.id_articles  ORDER BY id_comment_articles DESC ";
     $query = $bd->query($sql);
    $query = $bd->prepare($sql);
    $query->execute();

$resultat2 = $query->fetch(); */



if (isset($_GET['id'])) {
$id = $_GET["id"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM articles t1, comment_articles t2  where t2.id_articles = t1.id_articles and t1.id_articles = $id ORDER BY id_comment_articles DESC";

   $query2 = $bd->query($sql2);
   // $query2 = $bd->prepare($sql2);
    //$query2->execute();
/*$resultat = $query2->fetch(); */

/*$query2 = $bd->prepare($sql2);*/
$query2->execute(array("id" => $id));
/*$resultat2 = $query2->fetch();*/
}



                       while ($row = $query2->fetch()) {
                                       echo '  <div class="container">';

                                        echo '<h4>' .$row['nom_comment_articles'].' </h4>';
                                               echo' <p>'.$row['com_comment_articles'].'</p>';
                                               echo ' <p align="right"><b>DATE: </b>'. $row['date_comment_articles'].'</p>';
                                              echo'  <hr>';
                                           echo ' </div>';
                                        }

 ?>  


                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  

