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
<title> Redacteur </title>
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
<center>BIENVENNUE REDACTEUR</center>
 </h1>
</div>

<div class ="col-md-2">

  <div id="btn_inscriptiacei" style="margin-left: 270px;">
   <div id="btn_inscriptiacei_text">
    <span id="wb_uid4">
 <a href="../config/logout.php">
      
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
<center><h2 style="font-weight: 900 ">MODIFICATION-PUBLICATION-SUPPRESSION</h2></center>
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
<form action="/action_page.php">
<div class="row">
  <div class="left" style="background-color:#bbb;">
    <center><h2>ALBUMS</h2></center>
    
  </div>
  <?php 
require_once("../config/connexion.php");
require_once("imageClass.php");
$img = new imageClass();

if (isset($_GET['id'])) {
$id = $_GET["id"];
//echo $id .' " " ';
$sql2 = "SELECT * FROM albums t1 JOIN categorie t2 ON t1.id_categorie = t2.id_categorie where t1.id_album = $id";
$query2 = $bd->prepare($sql2);
$query2->execute(array("id" => $id));
$resultat = $query2->fetch();
} else {
      echo "ERROORR";
}

?>
 <div class="right" style="background-color:#ddd;">
<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <div class="row">
                <div class="col-md-8 ">
                  <form class="form-horizontal">
                    
                    <div class="form-group">
                       <label for="exampleInputName2" style="color: #FC6F20">Titre: </label>
                      </br>
                       <label for="exampleInputName2" ><h3><?php echo $resultat['titre_albums'] ?></h3></label>
                    </div>
                    </br>
                     </br>
                    <div class="form-group">
                     <td width="200" style="color: #FC6F20">Categorie:</td>
                         </br>
                       <label  ><h3><?php echo $resultat['libele_categorie'] ?></h3></label> 
                         </br>
                           </br>
                    </div>
                    
                     </br>
                     </br>

                      <div class="form-group">
                      <label for="exampleInputEmail2" style="color: #FC6F20">Date :</label>
                        </br>
                       <label for="exampleInputEmail2"><h3><?php echo $resultat['date_albums'] ?></h3> </label>   
                    </div>
                     </br>
                     </br>

                      <div class="form-group">
                      <label for="exampleInputEmail2" style="color: #FC6F20">Source : </label>
                        </br>
                      <label for="exampleInputEmail2"><h3><?php echo $resultat['source_albums'] ?></h3> </label>
                      
                    </div>
                     </br>
                     </br>

                     <div class="form-group">
                      <label for="exampleInputEmail2" style="color: #FC6F20">Description : </label>
                        </br>
                       <label  for="exampleInputEmail2"><h3><?php echo $resultat['description_albums'] ?></h3> </label>
                    </div>
                     </br>
                     </br>
                    
                



       <ul class="list-inline banner-social-buttons">
               <?php echo "<li><button type='submit' name='modifier' class='btn btn-default'  ><a href='mod_al.php?id={$resultat['id_album']}'>Modifier</a></button></li>" ?>
                <?php echo "<li><button type='submit' class='btn btn-default'><a href='sup_al.php?id={$resultat['id_album']}' style='color:black'>Supprimer</a></button></li>" ?>

                    <li> <?php echo "<li><button type='submit' class='btn btn-default'><a href='publ_al.php?id={$resultat['id_album']}' style='color:black'>Publier</a></button></li>" ?>

                    <li><li> <?php echo "<li><button type='submit' class='btn btn-default'><a href='retir_al.php?id={$resultat['id_album']}' style='color:black'>Retirer</a></button></li>" ?></li>
                  </ul>



                  </form>
                </div>
                <div class="col-md-4 sticky-top " style="weight:150px;position :static;top:; left :950px">
                    <img  class="img-fluid" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="../../<?php echo $resultat['photo_albums'] ?>" data-holder-rendered="true">
                </div>
                </div>
              </div>
            </div>
        </div>
      </section>    


  </div>
</div>    
        
</form>
</body>
</html>
