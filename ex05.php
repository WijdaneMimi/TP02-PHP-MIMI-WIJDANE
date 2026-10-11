<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
<?php
echo "<h1>Exercice 5 : Mentions selon la moyenne</h1>";
function obtenirMention($moyenne) {
    if ($moyenne < 0 || $moyenne > 20) {
        return "Note invalide";
    }
    if ($moyenne < 10) {
        return "Non validé";
    } elseif ($moyenne < 12) {
        return "Passable";
    } elseif ($moyenne < 14) {
        return "Assez bien";
    } elseif ($moyenne < 16) {
        return "Bien";
    } else {
        return "Très bien";
    }
}
$moyenne = 12; 
$valeursATester = [-1, 9, 10, 12, 14, 16, 21];
echo "<h2>4. Tests des valeurs demandées :</h2>";
foreach ($valeursATester as $valeur) {
    $mention = obtenirMention($valeur);
    $classe = ($mention == "Note invalide") ? "invalide" : "valide";
    
    echo "<div class='test'>";
    echo "Moyenne : <strong>$valeur</strong> => <span class='$classe'>$mention</span>";
    echo "</div>";
}
echo "<h2>Récapitulatif des règles</h2>";
echo "<table>";
echo "<tr><th>Moyenne</th><th>Message</th></tr>";
echo "<tr><td>Invalide (hors 0-20)</td><td class='invalide'>Note invalide</td></tr>";
echo "<tr><td>Inférieure à 10</td><td>Non validé</td></tr>";
echo "<tr><td>De 10 inclus à 12 exclu</td><td>Passable</td></tr>";
echo "<tr><td>De 12 inclus à 14 exclu</td><td>Assez bien</td></tr>";
echo "<tr><td>De 14 inclus à 16 exclu</td><td>Bien</td></tr>";
echo "<tr><td>De 16 à 20 inclus</td><td>Très bien</td></tr>";
echo "</table>";

?>

</body>
</html>