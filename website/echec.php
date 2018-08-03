<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="ecommerce.png" rel="shortcut icon" type="image/x-icon">
<link href="ecommerce.png" rel="apple-touch-icon" sizes="696x521">
<link href="css/vente.css" rel="stylesheet">
<link href="css/echec.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Calibri" rel="stylesheet">
<script src="java-script/jquery-1.12.4.min.js"></script>
<script src="java-script/transition.min.js"></script>
<script src="java-script/modal.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#div").modal('show');
   });
</script>
</head>
<body>
   <div id="container">
      <div id="div" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div id="wb_img">
                     <img src="images/e57885609621fc6ce8871324319556fc.png" id="img" alt=""></div>
                  <div id="wb_echec">
                     <span id="wb_uid0"><strong>Echec d'accès !</strong></span></div>
                  <div id="wb_essai">
                     <span id="wb_uid1"><strong>Réessayez....</strong></span></div>
                  <div id="wb_Image1">
                     <img src="images/131.png" id="Image1" alt=""></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>