     <div class="container col-lg-11">
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bnVUHWCynig" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
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