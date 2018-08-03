<?php
session_start();
 //garder la session ouverte
if (empty($_SESSION["id_compte"]) || empty($_SESSION["id_type_compte"])) {
    header("location:../index.php");
    exit();
}