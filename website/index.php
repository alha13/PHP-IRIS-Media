<?php
session_start();

if (!empty($_POST["a"])){

        require_once("config/connexion.php");
        $logUser = htmlspecialchars(trim($_POST["login"]));
        $passUser = htmlspecialchars(trim($_POST["password"]));

        $sql = 'SELECT * FROM compte WHERE login_compte  = :login AND password_compte= :pass';
        $query = $bd->prepare($sql);
        $query->execute(array(
            "login" => $logUser,
            "pass" => $passUser
        ));
        
        $resultat = $query->fetch();
        $groupe = $resultat["id_type_compte"];
        $count = $query->rowCount();
        if ($count != 0) {
            $id = $resultat["id_type_compte"];
            $_SESSION["id_compte"] = $id;
            $_SESSION["nom"] = $resultat["nom"];
            $_SESSION["prenom"] = $resultat["prenom"];
            $_SESSION["id_type_compte"] = "compte";
            echo "hfbf";
        }
            if ($groupe == 1) {
                header("location:Admin/admin.php");
                exit();
            }
            if ($groupe == 2) {
                header("location:Journaliste/journaliste.php");
                exit();
            }
            if ($groupe == 3) {
                header("location:Redacteur/redacteur.php");
                exit();
            }
            else {
            include('echec.php');
        }
        }
    

?>
<?php
/*if (isset($_POST['connexion'])){
    $reponse = mysql_query("SELECT * FROM utilisateur WHERE login = '$_POST[login]' AND mpasse = '$_POST[password]' AND id_type_utilisateur = 3") or die(mysql_error());

    $donnees = mysql_fetch_array($reponse);

    if (isset($donnees) and !empty($donnees)){
        $_SESSION['id_utilisateur'] = $donnees ['id_utilisateur'];
        $_SESSION['nom_utilisateur'] = $donnees['nom_utilisateur'];
        $_SESSION['prenom_utilisateur'] = $donnees['prenom_utilisateur'];

        header("Location:acceuil.php");
    }
    else{
        $msg_error = "Identifiants incorrects";
    }

    
}
if (isset($_GET['off']))
    {
        session_unset();
        session_destroy();
        $redir = "<script language='javascript'>document.location=('index.php')</script>;";
        echo $redir;
    }
    */
    ?>
<DOCTYPE html>
<html>
     <head>
      <tittle></tittle>
         <meta charset= "utf-8/">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <style>
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>
     </head>
    <body>

      <!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
           <img id="" class="" src="image/logo.jpg" style="wight:150px;height:100px; margin-left: 20px ">            
           <p id="profile-name" class="profile-name-card"></p>
            <form method="post" action="" class="form-signin" enctype="">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" name="login" placeholder="login" required autofocus>
                <input type="password" id="inputPassword" name ="password" class="form-control" placeholder="Mot de passe" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me">Rester connecter
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="a" value="Connexion" type="submit">Se connecter</button>
            </form><!-- /form -->
            <a href="" class="forgot-password">
                Mot de passe Oublié?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    
    </body> 
   
</html>
