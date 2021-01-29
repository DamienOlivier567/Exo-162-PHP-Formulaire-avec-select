<?php

echo " <br>";
if (isset($_GET['nom']) && isset($_GET["prenom"])){
    $nom = strip_tags($_GET['nom']);
    $prenom = strip_tags($_GET["prenom"]);

    echo "nom : " . $_GET["nom"] . " prenom : " .$_GET["prenom"];
}

echo " <br>";
if (isset($_POST['nom']) && isset($_POST["prenom"])) {
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST["prenom"]);

    echo "nom : " . $_POST["nom"] . " prenom : " . $_POST["prenom"];
}