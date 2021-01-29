<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #cont{
            width: 50vw;
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>
<div id="cont">
    <div class="form">
        <form method="get" action="user.php">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <br>
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    <div class="form">
        <form method="post" action="user.php">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <br>
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    <div class="form">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div>
                <select name="sexe" id="sexe">
                    <option value="Mr">Monsieur</option>
                    <option value="Mme">Madame</option>
                </select>
            </div>
            <div>
                <label for="nom">Nom: </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="prenom">Prenom: </label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div>
                <input type="file" name="file">
                <input type="submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php

if (isset($_POST["nom"], $_POST["prenom"], $_POST["sexe"], $_FILES["file"])){
    $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    echo $_POST["sexe"]." ".$_POST["nom"] . " " . $_POST["prenom"]." ".$extension;

    if ($extension === "pdf") echo "<br>C'est bien un PDF";
    else echo "<br>Erreur ce fichier n'est pas un PDF";
}

?>
