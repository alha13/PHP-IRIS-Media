<?php
require_once("../config/connexion.php");
require_once("imageClass.php");
$img = new imageClass();

if (!empty($_POST["executer"]) ) {
   
   // $categorie = htmlspecialchars(trim($_POST["categorie"]));
            $libelle= htmlspecialchars(trim($_POST["libelle"]));
            $date= htmlspecialchars(trim($_POST["date"]));
            $source = htmlspecialchars(trim($_POST["source"]));
            $text = htmlspecialchars(trim($_POST["text"]));

      $sql = "INSERT INTO flash_info (libele_flash,texte_flash,source_flash,date_flash) VALUES(?,?,?,?)";
    $query = $bd->prepare($sql);
    $query->execute(array(
             $libelle ,  $text, $source , $date
        ));
      }
     ?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/file.css">
<!------ Include the above in your HEAD tag ---------->
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #FC6F20;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<title> Journaliste </title>
</head>
<body>
 <div class = "row">
    <div class = "col-md-2">
    </div>

  <div class="col-md-8">

     <div class = "row">
    <div class ="col-md-2">
    </div>
    <div class ="col-md-8">
  <h1>
<center>BIENVENNUE JOURNALISTE</center>
 </h1>
</div>

<div class ="col-md-2">

  <div id="btn_inscriptiacei" style="margin-left: 270px;">
   <div id="btn_inscriptiacei_text">
    <span id="wb_uid4">
 <a href="../index.php">
      
       <strong>Deconnexion</strong>
      
 </a>
    </span>
</div>
</div>

</div>
</div>


<div class = "col-md-2">
</div>
</div>
</div>
<div class="topnav">
  <div class>
    <strong>
  <a href="article.php">Articles</a>
  <a href="audio.php">Audios</a>
  <a href="video.php">Videos</a>
  <a href="album.php">Albums</a>
  <a href="annonce.php">Annonces</a>
  <a href="flash.php">Flash Info</a>
   <img class = "image" src="../image/logo.jpg"  height="40px" style="margin-left: 670px">
  </strong>
  </div>
</div>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border:1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  backgrxound-color: #FC6F20;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color:#FC6F20;
}
</style>
<h2></h2>
<p></p>
<form method="post" action=""  enctype="multipart/form-data" >
<div class="row">
  <div class="left" style="background-color:#bbb;">
    <center><h2>FLASH INFOS</h2></center>
    
  </div>
 <div class="right" style="background-color:#ddd;">
<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  
                    <div class="form-group">
                      <label for="exampleInputName2">Libelle</label>
                      <input type="text" class="form-control" required name="libelle" id="exampleInputName2">
                    </div>
                      
                     <div class="form-group">
                      <label for="exampleInputEmail2">Date</label>
                      <input type="Date" name="date" required id="exampleInputEmail2" class="form-control input-sm" placeholder="Date d'ajout">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail2">Source</label>
                      <input type="text" required class="form-control" name="source" id="exampleInputEmail2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Texte</label>
                        <textarea  type="text" style="width:750px ; height:600px " name="text" required id="email" class="form-control input-sm" placeholder="Description">
                        </textarea>
                    </div> 
                    <input type="submit"  name="executer" class="btn btn-default" value="Executer">
                 

                 
                   <hr>
                </div>
              </div>
            </div>
        </div>
      </section>    


  </div>
</div> 
<div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h1><center>Table Des Infos</center></h1>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                    <th>Libelle</th>
                     <th>Texte</th>
                      <th>Source</th>
                    <th>Date</th>
                </thead>

              </table>
          </div>
    </div>
</div>        
        
</form>
</body>
</html>