
<?php


require_once("config/connectbd.php");
?>

<?php 

if (isset($_GET['idal'])) {
$id = $_GET["idal"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM albums t1, categorie t2 where t1.id_album = $id and t1.id_categorie=t2.id_categorie";
$query2 = $bd->prepare($sql2);
$query2->execute(array("idal" => $id));
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
                                    <h2 style="color: #FC6F20"; align="center"><?php echo $resultat['titre_albums'] ?> </h2>
                                    <hr>
                                </div>
                            <div class="container col-lg-11">


                                    <!-- lieu de lalbum -->














    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
    <style type="text/css">
    /* jQuery lightBox plugin - Gallery style */
    #gallery {
        background-color: #444;
        padding: 10px;
        width: 520px;
    }
    #gallery ul { list-style: none; }
    #gallery ul li { display: inline; }
    #gallery ul img {
        border: 5px solid #3e3e3e;
        border-width: 5px 5px 20px;
    }
    #gallery ul a:hover img {
        border: 5px solid #fff;
        border-width: 5px 5px 20px;
        color: #fff;
    }
    #gallery ul a:hover { color: #fff; }
    </style>
</head>

<body>


<div id="gallery">
    <ul>
        <li>
            <a href="photoslight/image1.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery').lightBox();">
                <img src="photoslight/thumb_image1.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="photoslight/image2.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="photoslight/thumb_image2.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="photos/image3.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="photos/thumb_image3.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="photos/image4.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="photos/thumb_image4.jpg" width="72" height="72" alt="" />
            </a>
        </li>
        <li>
            <a href="photos/image5.jpg" title="Utilize a flexibilidade dos seletores da jQuery e crie um grupo de imagens como desejar. $('#gallery a').lightBox();">
                <img src="photos/thumb_image5.jpg" width="72" height="72" alt="" />
            </a>
        </li>
    </ul>
</div>

</body>
</html>




                                        <!-- fin de lalbum -->



                                </div>
                                <div class="container col-lg-11">
                                     <hr>
                                    <p class="textdate" style="color: #1830d9"> <b>Gatégorie: </b> <?php echo strtoupper($resultat['libele_categorie']) ?></p>
                                    <p class="textdate"><b>Date:  </b> <?php echo $resultat['date_albums'] ?></p>
                                    <p class="textsource"> <b>Sources: </b><?php echo $resultat['source_albums'] ?></p>
                                    <hr>


                                    <!-- descrition -->
                                    <h3> <?php echo $resultat['description_albums'] ?></h3>
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
           $id = $_GET["idal"];
       

      
    $sql = "INSERT INTO  comment_albums(nom_comment_albums, com_comment_albums, date_comment_albums, id_album) VALUES(?,?,?,?)";
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



if (isset($_GET['idal'])) {
$id = $_GET["idal"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM albums t1, comment_albums t2  where t2.id_album = t1.id_album and t1.id_album = $id ORDER BY id_comment_albums DESC";

   $query2 = $bd->query($sql2);
   // $query2 = $bd->prepare($sql2);
    //$query2->execute();
/*$resultat = $query2->fetch(); */

/*$query2 = $bd->prepare($sql2);*/
$query2->execute(array("idal" => $id));
/*$resultat2 = $query2->fetch();*/
}



                       while ($row = $query2->fetch()) {
                                       echo '  <div class="container">';

                                        echo '<h4>' .$row['nom_comment_albums'].' </h4>';
                                               echo' <p>'.$row['com_comment_albums'].'</p>';
                                               echo ' <p align="right"><b>DATE: </b>'. $row['date_comment_albums'].'</p>';
                                              echo'  <hr>';
                                           echo ' </div>';
                                        }

 ?>  


                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  

