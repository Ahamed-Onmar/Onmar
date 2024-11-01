<!DOCTYPE html>
<html>
    <head>
        <meta charset="ut-8"/><title>Script PHP</title>
</head>
<body>
    <h4> Formulaire Html et Interaction avec PHP</h4>
    <form action= "index.php" method="post" enctype="multipart/form-data">
        <label>Prenom</label>
        <input type="text" name="prenom">
        <label>Nom</label>
        <input type="text" name="nom">
        <label>CV</label>
        <input type="file" name="cv">
        <br><br>
        <label>Adresse</label>
        <input type="text"name="adresse">
        <label>Telephone</label>
        <input type="text"name="telephone">
        <br><br>
        <button type="submit">Enregistrer</button>
</form>

    <?php
    echo "Bonjour les etudiants : Un Script php dans structure de page Html";

    ?>
    </body>
    </html>
