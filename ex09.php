<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 </title>
</head>
<body>

<?php
echo "<h1>Exercice 9 </h1>";
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
$somme = 0;           
$nbValides = 0;       
$meilleureNote = 0;   
$meilleurEtudiant = ""; 
$nbEtudiants = count($notes); 
echo "<h2>1 & 2. Tableau des notes</h2>";
echo "<table>";
echo "<tr><th>Étudiant</th><th>Note</th><th>Statut</th></tr>";
foreach ($notes as $nom => $note) {
    $somme += $note;
    
    if ($note >= 10) {
        $statut = "<span class='valide'>Validé</span>";
        $nbValides++; 
    } else {
        $statut = "<span class='non-valide'>Non validé</span>";
    }
    
  
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
    
 
    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>$statut</td>";
    echo "</tr>";
}

echo "</table>";
echo "<div class='resultat'>";
$moyenne = $somme / $nbEtudiants;
echo "<p><strong>3. Somme des notes :</strong> $somme</p>";
echo "<p><strong>3. Moyenne de la classe :</strong> $moyenne</p>";
echo "<p><strong>4. Nombre d'étudiants ayant validé :</strong> $nbValides</p>";
echo "<p><strong>5. Meilleure note :</strong> $meilleureNote obtenue par <strong>$meilleurEtudiant</strong></p>";

echo "</div>";

?>

</body>
</html>