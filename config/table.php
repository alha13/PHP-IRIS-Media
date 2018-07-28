<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../ecommerce.png" rel="shortcut icon" type="image/x-icon">
<link href="../ecommerce.png" rel="apple-touch-icon" sizes="696x521">
<link href="../css/vente.css" rel="stylesheet">
<link href="../css/table.css" rel="stylesheet">
</head>
<body>
   <div id="container">
      <div id="Html1">
 <?php 
           //sbrhtb013 ORDER BY id_agence DESC LIMIT 5 
            if ($sql2 = "SELECT * FROM utilisateur WHERE id_type_utilisateur = '1' ORDER BY id_type_utilisateur  DESC LIMIT 5 ") {
                $query2 = $bd->query($sql2);
                $i = 0;
                while ($row = $query2->fetch()) {
                    $color = $i % 2 == 0 ? "#1E90FF" : "#D2691E";
                    $i = $i + 1;
                    echo "<tr id="wb_uid0" style='background-color:$color'>";
                    echo "<td class='cell0'><span style='color:white' id='wb_uids4'>" . $row['nom_utilisateur'] . " </span></td>";
                    echo "<td class='cell0'><span style='color:white' id='wb_uids4'>" . $row['prenom_utilisateur'] . " </span></td>";
                    echo "<td class='cell0'><span style='color:white' id='wb_uisd4'>" . $row['photo_utilisateur'] . " </span></td>";
                    echo "<td class='cell0'><span style='color:white' id='wb_usid4'>" . $row['login_utilisateur'] . " </span></td>";
                    echo "<td class='cell0'><span style='color:white' id='wb_usid4'>" . $row['pass_utilisateur'] . " </span></td>";
                    echo "<td class='cell0'><span  style='color:white' id='wb_suid4'><a style='text-decoration:none;color:white'  href='modAg.php?id={$row['nom_utilisateur']}'>&nbsp;&nbsp;<i class='fa fa-edit'></i></a></span></td>";
                    echo "<td class='cell0'><span style='color:white' id='wb_usid4'><a style='text-decoration:none;color:white' href='supAg.php?id={$row['nom_utilisateur']}'>&nbsp;&nbsp;<i class='fa fa-trash'></i></a></span></td>";
                    echo "</tr>";
                }
            } else {
                echo "errore";
            } ?></div>
   </div>
</body>
</html>