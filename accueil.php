<?php

require_once("config/connectbd.php");

 ?>

      
        <!-- Begin Body -->
 <div class="container">


    
            <div class="row">


 <!--- DEBUT zone laterale gauche---->             
                <div class="col-md-3 sticky-top position:fixed data-offset-top=300" style="z-index=9999; top:0px">

                    <div class="card rounded-0 border-right-0 border-left-0 sticky-top" id="midCol">
                        <div class="card-body rounded-0">
                            <h2 style="text-align: center; background-color: rgba(164, 153, 150, 0.88);" id="titre"><b class="text-danger">Annonces</b>




                            </h2>

                                <h4>OUATRA</h4>



                            <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut
                        semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave
                        meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                            <img class="img-fluid pb-4" src="//placehold.it/300/6f42c1/eee">
                            <hr>
                            <h5><u>Heading</u></h5>
                            <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
                        readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch
                        selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                            <hr>
                            <h5><u>Heading</u></h5>
                            <p>Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica
                        cray plaid, vegan brunch Banksy leggings</p>
                        </div>
                    </div>
            </div>
<!--- FIN zone laterale gauche---->



<!--- droite zone laterale ---->
<div class="col-md-7">




<!--DEBUT CAROUSEL---->
<div class="">
  <h2 style="color: #373738">Info à la une....</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:620px; height: 370px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active" >
        <img src="img/n1BZ3wrS.jpg" href="azo.com" alt="Los Angeles" style="width:620px; height: 370px">
        <div class="carousel-caption">
          <h3 >TIRE</h3>
          <p>description</p>
        </div>
      </div>

      <div class="item">
        <img src="img/n1BZ3wrS.jpg" alt="Chicago" style="width:620px; height: 370px">
        <div class="carousel-caption">
          <h3 href="azo.com">Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/n1BZ3wrS.jpg" alt="New York" style="width:620px; height: 370px">
        <div class="carousel-caption">
          <h3 href="azo.com">New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 <!--FIN CAROUSEL---->

<hr>





<!---debut POLITIQUES---->

<!-- Section: Magazine v.2 -->
<section class="magazine-section my-5">

    <?php
    $sql2 = "SELECT * FROM articles  where publie_articles = 1 AND id_categorie = 1 ORDER BY id_articles DESC LIMIT 5 ";
     $query2 = $bd->query($sql2);
   // $query2 = $bd->prepare($sql2);
    //$query2->execute();



$resultat = $query2->fetch(); 
 //while ($resultat = $query2->fetch()) {

   
    

   

  echo '<!-- Section heading -->';;
  echo' <h2 class="h1-responsive font-weight-bold text-center my-5">POLITIQUES</h2>';
 echo' <hr>';
  echo'<!-- Section description -->';
  

  echo'<!-- Grid row -->';
  echo'<div class="row">';

    echo'<!-- Grid column -->';
    echo'<div class="col-lg-6 col-md-12">';

    echo'  <!-- Featured news -->';
   echo'   <div class="single-news mb-lg-0 mb-4">';

      echo'  <!-- Image -->';
       echo' <div class="view overlay rounded z-depth-1-half mb-4">';
        echo'  <img class="img-fluid" src="'.$resultat['image_articles'] .'" alt="Sample image">';
       echo'   <a>';
          echo'  <div class="mask rgba-white-slight"></div>';
        echo'  </a>';
      echo'  </div>';

        echo'<!-- Data -->';
        echo'<div class="news-data d-flex justify-content-between">';
       //  echo' <a href="#!" class="deep-orange-text"><h6 class="font-weight-bold"><i class="fa fa-cutlery pr-2"></i>'. $resultat['libele_categorie'].'</h6></a>';
         echo' <p class="font-weight-bold dark-grey-text"><i class="fa fa-clock-o pr-2"></i>'. $resultat['date_articles'] .'</p>';
       echo' </div>';

       echo' <!-- Excerpt -->';
      echo'  <h3 class="font-weight-bold dark-grey-text mb-3"><a href="'.$resultat['titre_articles'].'" style="color:  #FC6F20"'.$resultat['titre_articles'].'</a></h3>';
      echo'  <p class="dark-grey-text mb-lg-0 mb-md-5 mb-4"><h4>'. $resultat['description_articles'] .'</h4></p>';

     echo' </div>';
    echo'  <!-- Featured news -->';

   echo' </div>';

   
   echo' <!-- Grid column -->';

//-------------------------------------------------------------------------------------------------

  echo'  <!-- Grid column -->';
   echo' <div class="col-lg-6 col-md-12">';

     echo' <!-- Small news -->';
    echo'  <div class="single-news mb-4">';
while ($resultat = $query2->fetch()) {
    echo'    <!-- Grid row -->';
     echo'   <div class="row">';

      echo'    <!-- Grid column -->';
        echo'  <div class="col-md-3">';

         echo'   <!--Image-->';
         echo'   <div class="view overlay rounded z-depth-1 mb-4">';
           echo'   <img class="img-fluid" src="'. $resultat['image_articles'] .'" alt="Sample image">';
           echo'   <a>';
            echo'    <div class="mask rgba-white-slight"></div>';
            echo'  </a>';
           echo' </div>';

         echo' </div>';
        echo'  <!-- Grid column -->';

        echo'  <!-- Grid column -->';
         echo' <div class="col-md-9">';

          echo'  <!-- Excerpt -->';
          echo'  <p class="font-weight-bold dark-grey-text">'. $resultat['date_articles'] .'</p>';
           echo' <div class="d-flex justify-content-between">';
           echo'   <div class="col-11 text-truncate pl-0 mb-3">';
              echo'  <a href="'. $resultat['id_articles'] .'" class="dark-grey-text">'. $resultat['description_articles'] .'</a>';
             echo' </div>';
           echo'   <a><i class="fa fa-angle-double-right"></i></a>';
           echo' </div>';
 
          echo'</div>';
         echo' <!-- Grid column -->';

        echo'</div>';
        echo'<!-- Grid row -->';
        echo '<hr>';
}
      echo'</div>'; 
     echo' <!-- Small news -->';

      echo'<!-- Small news -->';
  

     echo' </div>';
     echo' <!-- Small news -->';

    echo'</div>';
   echo' <!--Grid column-->';

echo '<hr style="border-width: 4px;">';
  echo'</div>';


    ?>
</section>
<!-- Section: Magazine v.2 -->
<!---debut POLITIQUES---->




<!-- <hr style="border-width: 4px;"> -->

</div>
          
<!--end body--->