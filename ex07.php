<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 : Boucles et Pyramide</title>
</head>
<body>
<?php
echo "<h1>Exercice 7 </h1>";
$nombre = 7;
echo "<div class='section'>";
echo "<h2>1. Table de multiplication de $nombre</h2>";
echo "<pre>"; 
for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat <br>";
}
echo "</pre>";
echo "</div>";
echo "<div class='section'>";
echo "<h2>2. Pyramide de 6 lignes</h2>";
echo "<pre>";
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "<br>";
}

echo "</pre>";
echo "</div>";

?>

</body>
</html>