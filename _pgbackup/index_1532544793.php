<?php

require_once("config/connectbd.php");

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IRIS Médias</title>
        <meta name="description" content="A responsive template with a large top header above 3 columns. This template uses position:sticky to attach the left 2 columns accordingly when the user scrolls. Dropdown search for in navbar. Feather icons."/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="Codeply">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/theme.css"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #ee5017;">
            <div class="container">
                <a class="navbar-brand text-uppercase" href="#" target="ext"><b>IRIS</b></a>
                <a class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"> <span class="navbar-toggler-icon"></span> </a>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="#sssssssssssssssssssss" class="nav-link"><b style="color: #ffffff; margin-right: 14px;">Articles</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#sssssssssssssssssssss" class="nav-link"><b style="color: #ffffff; margin-right: 14px;">Videos</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#sssssssssssssssssssss" class="nav-link"><b style="color: #ffffff; margin-right: 14px;">Audios</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#sssssssssssssssssssss" class="nav-link"><b style="color: #ffffff; margin-right: 14px;">Albums</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#sssssssssssssssssssss" class="nav-link"><b style="color: #ffffff; margin-right: 14px;">Annonces</b></a>
                        </li>
                        <!-- lieu dapel page categorie-->
                        <?php

                    if (isset($_GET['page'])) {

try {//admga adlic adtenv adplb 
    switch ($_GET['page']) {
           /*  case '':
            include('bienvenue.php');
                  break; */
        case 'admga':
            include('articles.php');
            break;
        case 'adlic':
            include('clients.php');
            break;
        case 'adtenv':
            include('vendeurs.php');
            break;
        case 'adplb':
            include('pub.php');
            break;

        /*  case 'mod':
            include('mod_articles.php');
            break; */

                case 'admdc':
            include('commandes.php');
            break;

        default:
                  include('error404.php');

            break;
    }
} catch (customException $e) {
      echo $e->errorMessage();
}
}


                     ?>
                    </ul>
                    <ul class="ml-auto navbar-nav">
</ul>
                    <ul class="ml-auto navbar-nav">
                        <li class="dropdown nav-item">
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
                        <h1 id="grdtitre" class="text-danger">IRIS</h1>
                    </div>
                    <div class="col-lg-6">
                        <img src="Copie%20de%20logo-iris-media.png" class="float-right" alt="ad spot">
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

    /*$query = $bd->query("SELECT * FROM categorie")->fetchAll(); ?>
                        <?php
           // foreach ($query as $key => $value) {
              echo '<option value="' . $value[0] . '">' . $value[1] .

              //  '</option>';
           // }*/
            ?>
                        <div class="card-body rounded-0 px-1">
                            <ul class="nav flex-lg-column flex-row">
                                <li class="nav-item">
                                    <?php
                                  $query = $bd->query("SELECT * FROM categorie")->fetchAll();
                                  foreach ($query as $key => $value) {
                                   echo' <a href="#" class="nav-link text-purple px-0" style="background-color: #babbbc; color: #ffffff; text-align: center; margin-bottom: 5px;">' .strtoupper($value[1] ).'</a>';
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
                        <div class="card-header rounded-0 text-white" style="background-color: rgba(237, 63, 0, 0.91); margin-bottom: 25px;">
                            <b>LE TOP DE L'ACTUS</b>
                        </div>
                        <!--/card-body-->
                        <?php 
                            include('categories_videos.php');

                         ?>
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
