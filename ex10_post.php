<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>
<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['groupe'])) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);
    if (empty($nom) || empty($prenom) || empty($groupe)) {
        echo "<div class='erreur'>Erreur : Tous les champs sont obligatoires.</div>";
    } else {
        $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "<div class='message'>";
        echo "<h2>Bienvenue !</h2>";
        echo "<p>Nom : <strong>$nomSecurise</strong></p>";
        echo "<p>Prénom : <strong>$prenomSecurise</strong></p>";
        echo "<p>Groupe : <strong>$groupeSecurise</strong></p>";
        echo "</div>";
    }

} else {
    echo "<div class='erreur'>";
    echo "<h2>Accès direct interdit</h2>";
    echo "<p>Veuillez passer par le formulaire. (Undefined array key)</p>";
    echo "</div>";
}
?>

<br>
<a href="ex10_post.html">Retour au formulaire POST</a>

</body>
</html>