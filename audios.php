
<?php
require_once("config/connectbd.php");

?>

<?php 

if (isset($_GET['ida'])) {
$id = $_GET["ida"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM audios t1, categorie t2 where t1.id_audios = $id and t1.id_categorie=t2.id_categorie";
$query2 = $bd->prepare($sql2);
$query2->execute(array("ida" => $id));
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
                                    <h2 style="color: #FC6F20"; align="center"><?php echo $resultat['titre_audios'] ?> </h2>
                                    <hr>
                                </div>

                              <!--   video youtube -->
                              <div class="container col-lg-11 " style="text-align: center;">
                           

<script src="js/jquery-1.12.4.min.js"></script>
<link href="blue.monday/jplayer.blue.monday.min.css" rel="stylesheet"/>
<script src="js/jquery.jplayer.min.js"></script>
<style >
   
   div#container {
   margin: 0 auto 0 auto;
   position: relative;
   text-align: left;
   width: 970px;
}
body {
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-weight: normal;
   line-height: 1.1875;
   margin: 0;
   text-align: all;
}
a {
   color: #0000FF;
   text-decoration: none;
}
a:visited {
   color: #800080;
}
a:active {
   color: #FF0000;
}
a:hover {
   color: #0000FF;
   text-decoration: underline;
}
.jp-interface {
   background-color: #EEEEEE  !important;
}
.jp-audio {
   width: 100%  !important;
}
.jp-details,
.jp-playlist {
   background-color: #CCCCCC  !important;
}
.jp-audio,
.jp-audio-stream,
.jp-video {
   background-color: #EEEEEE  !important;
   border: 1px solid #009BE3  !important;
   color: #666666  !important;
   font-family: "Arial"  !important;
   font-size: 13px  !important;
}
.jp-video-play {
   display: none  !important;
}
#wb_Extension3 {
   height: 120px;
   left: 10px;
   /*position: inherit;*/
   top: 260px;
   width: 720px;
   z-index: 0;
}

</style>
<script>   
   $(document).ready(function()
   {
      $("#Extension3").jPlayer({
         ready: function () {
            $(this).jPlayer("setMedia", {
              /* lien du fichier audio*/
            mp3: "06-benabar-moins_vite.mp3",
            title: "IRIS Média Audio player",
            });
         },
         cssSelectorAncestor: "#Extension3-container",
         supplied: "mp3",
         backgroundColor: "#EEEEEE",
         useStateClassSkin: true,
         autoBlur: false,
         loop: false,
         muted: false,
         smoothPlayBar: false,
         keyEnabled: true,
         remainingDuration: true,
         toggleDuration: true,
         volume: 0.8
      });
      function onResizeExtension3()
      {
         var $jPlayerVolume = $('#Extension3-container .jp-volume-controls');
         if ($('#wb_Extension3').width() < 400)
         {
            $jPlayerVolume.hide();
         }
         else
         {
            $jPlayerVolume.show();
         }
         $('#Extension3-container .jp-interface').height($('#wb_Extension3').height() - 26);
      }
      onResizeExtension3();
      $(window).resize(function() { onResizeExtension3() } );
   });
</script>

</head>
<body>
   <div id="container">
      <div id="wb_Extension3">
         <div id="Extension3" class="jp-jplayer"></div>
         <div id="Extension3-container" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-single">
               <div class="jp-gui jp-interface">
                  <div class="jp-controls">
                     <button class="jp-play" role="button" tabindex="0">play</button>
                     <button class="jp-stop" role="button" tabindex="0">stopper</button>
                  </div>
                  <div class="jp-progress">
                     <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                     </div>
                  </div>
                  <div class="jp-volume-controls">
                     <button class="jp-mute" role="button" tabindex="0">silence</button>
                     <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                     <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                     </div>
                  </div>
                  <div class="jp-time-holder">
                     <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                     <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                     <div class="jp-toggles">
                        <button class="jp-repeat" role="button" tabindex="0">repeter</button>
                     </div>
                  </div>
               </div>
               <div class="jp-details">
                  <div class="jp-title" aria-label="title">&nbsp;</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
</div>

                           <!--  fin youtube -->

                                <div class="container col-lg-11">
                                     <hr>
                                    <p class="textdate" style="color: #1830d9"> <b>Gatégorie: </b> <?php echo strtoupper($resultat['libele_categorie']) ?></p>
                                    <p class="textdate"><b>Date:  </b> <?php echo $resultat['date_audios'] ?></p>
                                    <p class="textsource"> <b>Sources: </b><?php echo $resultat['source_audios'] ?></p>
                                    <hr>


                                    <!-- descrition -->
                                    <h3> <?php echo $resultat['description_audios'] ?></h3>
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
           $id = $_GET["ida"];
       

      
    $sql = "INSERT INTO  comment_audios(nom_comment_audios, com_comment_audios, date_comment_audios, id_audios) VALUES(?,?,?,?)";
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
                                                <input required="" type="text" class="form-control" id="email" placeholder="Entrer votre nom" name="nom">
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



if (isset($_GET['ida'])) {
$id = $_GET["ida"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM audios t1, comment_audios t2  where t2.id_audios = t1.id_audios and t1.id_audios = $id ORDER BY id_comment_audios DESC";

   $query2 = $bd->query($sql2);
   // $query2 = $bd->prepare($sql2);
    //$query2->execute();
/*$resultat = $query2->fetch(); */

/*$query2 = $bd->prepare($sql2);*/
$query2->execute(array("ida" => $id));
/*$resultat2 = $query2->fetch();*/
}



                       while ($row = $query2->fetch()) {
                                       echo '  <div class="container">';

                                        echo '<h4>' .$row['nom_comment_audios'].' </h4>';
                                               echo' <p>'.$row['com_comment_audios'].'</p>';
                                               echo ' <p align="right"><b>DATE: </b>'. $row['date_comment_audios'].'</p>';
                                              echo'  <hr>';
                                           echo ' </div>';
                                        }

 ?>  


                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  

