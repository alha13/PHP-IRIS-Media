<?php

require_once("config/connectbd.php");

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <meta charset="utf-8">
        <title>IRIS Médias</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/theme.css"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #ee5017;">
            <div class="container">
                <a class="navbar-brand text-uppercase" href="index.php" ><b>IRIS</b></a>
                <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"> <span class="navbar-toggler-icon"></span> </a>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="index.php?page=art" class="nav-link" style="background-color: rgba(237, 63, 0, 0);"><b style="color: #ffffff; margin-right: 14px;">Articles</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=vid" class="nav-link" style="background-color: rgba(237, 63, 0, 0);"><b style="color: #ffffff; margin-right: 14px;">Videos</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=aud" class="nav-link" style="background-color: rgba(237, 63, 0, 0);"><b style="color: #ffffff; margin-right: 14px;">Audios</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=alb" class="nav-link" style="background-color: rgba(237, 63, 0, 0);"><b style="color: #ffffff; margin-right: 14px;">Albums</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=ann" class="nav-link" style="background-color: rgba(237, 63, 0, 0);"><b style="color: #ffffff; margin-right: 14px;">Annonces</b></a>
                        </li>
                        <!-- lieu dapel page categorie-->
                        
                    </ul>
                    <ul class="ml-auto navbar-nav">
</ul>
                    <ul class="ml-auto navbar-nav">
                        <li class="dropdown nav-item" style="right: -637px;">
                            <a href="#" class="nav-link pb-0" data-toggle="dropdown"><i data-feather="search"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right p-2 bg-dark">
                                <form class="form-inline flex-nowrap">
                                    <input type="text" class="form-control border-bottom-0 rounded-0" placeholder="Rechercher">
                                    <button type="submit" class="btn btn-secondary border-0 border-bottom rounded-0 pb-0">
                                        <i data-feather="search"></i>
                                    </button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->


        <header class="masthead" id="logo" style="background-color: rgba(215, 55, 2, 0);">
            <div class="container py-5 bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 id="grdtitre" class="text-danger"><i>IRIS</i></h1>
                    </div>
                    <div class="col-lg-6">
                     <a href="index.php">  <img   src="Copie%20de%20logo-iris-media.png" class="float-right" alt="ad spot"></a>
                    </div>
                </div>
            </div>
        </header>



        
        <!-- Begin Body -->
        <div class="container bg-white">
            <div class="no-gutters row">
                <!-- left side column -->
                <div class="col-lg-2">
                    <div class="card rounded-0 border-right-0 border-left-0 sticky-top" id="sidebar">
                        <div class="card-header rounded-0  text-white d-none d-lg-block" style="background-color: rgba(237, 63, 0, 0.86);">
                            <!------les categories depuis la base de donnees---->
                            <b>CATRGORIES</b>
                        </div>
                        <?php

                        ?>
                        <div class="card-body rounded-0 px-1">
                            <ul class="nav flex-lg-column flex-row">
                                <li class="nav-item">
                                    <?php
                                  $query = $bd->query("SELECT * FROM categorie")->fetchAll();
                                  foreach ($query as $key => $value) {
                                   echo' <a href="index.php?cat='.$value[0].'" class="nav-link text-purple px-0" style="background-color: #babbbc; color: #ffffff; text-align: center; margin-bottom: 5px;"><b>' .strtoupper($value[1] ).'</b></a>';
                                   //echo "<hr>";
                                    }
                                   ?>
                                </li>
                            </ul>
                            <img src="img/n1BZ3wrS.jpg" class="mt-4 img-fluid">
                            <p class="pt-3" style="text-align: center;"><b>IRIS tous drots reservés</b></p>
                        </div>
                        <!--/panel body-->
                    </div>
                    <!--/panel-->
                </div>
                <!--/end left column-->
                <!--mid column-->
                <!--/end mid column-->
                <!-- right content column-->
                <div class="col-lg-10 col-md-10" id="content">
                    <div class="card rounded-0 border-right-0 border-left-0">
                        <div class="card-header rounded-0 text-white" style="background-color: rgba(237, 63, 0, 0.91); margin-bottom: 25px; text-align: center;">  
<?php 
/*debut de bande orange pour les titre*/
if (isset($_GET['page']) || isset($_GET['cat'])) {

  if (isset($_GET['page'])){

 switch ($_GET['page']) {
                            case 'art':
                            $titre = 'ARTICLES';
                              echo '<b>'.strtoupper($titre).'</b>';
                            break;


                            case 'vid':
                            $titre = 'Videos';
                            echo '<b>'.strtoupper($titre).'</b>';
                            break;


                            case 'aud':
                            $titre = 'audios';
                            echo '<b>'.strtoupper($titre).'</b>';
                            break;


                            case 'alb':
                            $titre = 'albums';
                            echo '<b>'.strtoupper($titre).'</b>';
                            break;


                            case 'ann':
                            $titre = 'Annonces';
                            echo '<b>'.strtoupper($titre).'</b>';
                            break;


                            default:
                             echo ("<b>LE TOP DE L'ACTUS</b>");
                            break;  
                             
                        }
                       /*else echo ("<b>LE TOP DE L'ACTUS</b>");*/
                    }






if (isset($_GET['cat'])) {
$id = $_GET["cat"];

                $sql2 = "SELECT * FROM  categorie t2 where t2.id_categorie = $id  ";
                $query2 = $bd->prepare($sql2);
                $query2->execute(array("id" => $id));
                $resultat = $query2->fetch();
                             switch ($_GET['cat']) {
                                    
                                     case $resultat['id_categorie']:
           
                                         $titre = $resultat['libele_categorie'];
                                            echo '<b>'.strtoupper($titre).'</b>';
                                         break; 

                                           default:
                                          echo ("<b>LE TOP DE L'ACTUS</b>");
                                          break;  
                 }

             } 

} else echo ("<b>LE TOP DE L'ACTUS</b>");

               echo '</div>';
               echo '<div class="container">';
                            
/*fin de bande orange pour les titre*/

         $adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
$_SESSION['adresse'] = $adresse;
//echo $_SESSION['adresse'];

/*indiquer les adress du serveur d'hebergement*/
if ($_SESSION['adresse'] == "http://localhost/test/PHP-IRIS-Media/index.php" || $_SESSION['adresse'] == "http://localhost/test/PHP-IRIS-Media/"){
   include('accueil.php');
  
}                  
                      
else{

if (isset($_GET['page'])) {

try {
    switch ($_GET['page']) {
         
        case 'art':
            include('categories_articles.php');
            $titre = 'ARTICLES';
            break;
        case 'vid':
            include('categories_videos.php');
            break;
        case 'aud':
            include('categories_audios.php');
            break;
        case 'alb':
            include('categories_albums.php');
            break;

                case 'ann':
            include('categories_annonces.php');
            break;

        default:
                  include('error404.php');

            break;
    }
} catch (customException $e) {
      echo $e->errorMessage();
}
}



else {
  //  include('accueil.php');
}

if (isset($_GET['id'])) {
      $echo = $_GET['id'];
      try {
           
            switch ($_GET['id']) {
     
                  case $echo:
                        
                        include('article.php');
                        break;
               
                  default:
                        include('error404.php');  
                        
                        break;
            }
      } catch (customException $e) {
            echo $e->errorMessage();
      }
}


if (isset($_GET['idv'])) {
      $echo = $_GET['idv'];
      try {
           
            switch ($_GET['idv']) {
     
                  case $echo:
                        
                        include('videos.php');
                        break;
               
                  default:
                        include('error404.php');  
                        
                        break;
            }
      } catch (customException $e) {
            echo $e->errorMessage();
      }
}


if (isset($_GET['ida'])) {
      $echo = $_GET['ida'];
      try {
           
            switch ($_GET['ida']) {
     
                  case $echo:
                        
                        include('audios.php');
                        break;
               
                  default:
                        include('error404.php');  
                        
                        break;
            }
      } catch (customException $e) {
            echo $e->errorMessage();
      }
}


if (isset($_GET['idal'])) {
      $echo = $_GET['idal'];
      try {
           
            switch ($_GET['idal']) {
     
                  case $echo:
                        
                        include('albums.php');
                        break;
               
                  default:
                        include('error404.php');  
                        
                        break;
            }
      } catch (customException $e) {
            echo $e->errorMessage();
      }
}


if (isset($_GET['cat'])) {
      $echo = $_GET['cat'];
      try {
           
            switch ($_GET['cat']) {
     
                  case $echo:
                        
                        include('categories.php');
                        break;
               
                  default:
                        include('error404.php');  
                        
                        break;
            }
      } catch (customException $e) {
            echo $e->errorMessage();
      }
}


//include('accueil.php');
}
?>




                        </div>
                        <!--/card-body-->
                     
                    </div>
                    <!--/panel-->
                    <!--/end right column-->
                </div>
            </div>
        </div>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 py-5 text-right" style="background-color: rgba(52, 46, 44, 0.91);">
                        <h6 style="color: #ffffff;">©Company 2018</h6>
                    </div>
                </div>
            </div>
        </footer>
        <!--scripts loaded here-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//unpkg.com/feather-icons@4.7.0/dist/feather.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
