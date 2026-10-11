<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>

    <?php
    $nom = "Mimi";
    $prenom = "Wijdane";
    $age = 20;
    $formation = "WEB";
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je fais une formation en" . $formation . ". ";
    $phrase .= "J'apprends PHP.";
    echo "<p>" . $phrase . "</p>";
    $note = 12;
    $Note = 16;

    echo "<p>La valeur de \$note est : " . $note . "</p>";
    echo "<p>La valeur de \$Note est : " . $Note . "</p>";
    ?>

</body>
</html>