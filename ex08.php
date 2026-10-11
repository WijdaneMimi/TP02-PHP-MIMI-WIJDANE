<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 : Boucles et Contrôle</title>
</head>
<body>
<?php
echo "<h1>Exercice 8 : Boucles et Contrôle</h1>";
echo "<div class='section'>";
echo "<h2>Partie 1 : Nombres pairs (0 à 20)</h2>";

$i = 0;
while ($i <= 20) {
    // On vérifie si le nombre est pair (modulo 2 = 0)
    if ($i % 2 == 0) {
        // Si c'est 10, on le met en gras
        if ($i == 10) {
            echo "<span class='gras'>$i</span> ";
        } else {
            echo "$i ";
        }
    }
    $i++;
}
echo "</div>";
echo "<div class='section'>";
echo "<h2>Partie 2 : While vs Do-While</h2>";
echo "<h3>Test avec <code>while</code> :</h3>";
$compteur = 5; 
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}
echo "Nombre d'exécutions du corps : <strong>$executionsWhile</strong><br>";
echo "<em>(Explication : La condition est fausse dès le départ, donc la boucle ne s'exécute jamais.)</em>";
echo "<h3>Test avec <code>do-while</code> :</h3>";
$compteur = 5; 
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);
echo "Nombre d'exécutions du corps : <strong>$executionsDoWhile</strong><br>";
echo "<em>(Explication : Le 'do' s'exécute une fois avant de vérifier la condition, même si elle est fausse.)</em>";
echo "</div>";
echo "<div class='section'>";
echo "<h2>Partie 3 : Continue et Break (1 à 20)</h2>";
echo "<p>On ignore les multiples de 3 et on s'arrête à 16 (avant affichage).</p>";
for ($j = 1; $j <= 20; $j++) {
    if ($j % 3 == 0) {
        continue; 
    }
    if ($j == 16) {
        break;
    }
    echo "$j ";
}
echo "</div>";

?>

</body>
</html>