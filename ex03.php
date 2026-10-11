<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>

    <h1>Exercice 3 </h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");
    $prix_unitaire = 60;
    $quantite = 3;
    $total_ht = $prix_unitaire * $quantite;
    $montant_tva = $total_ht * (TAUX_TVA / 100);
    $total_ttc = $total_ht + $montant_tva;
    $total_ttc += 15;
    echo "<h2>Récapitulatif</h2>";
    echo "<ul>";
    echo "<li>Prix unitaire HT : " . $prix_unitaire . " " . DEVISE . "</li>";
    echo "<li>Quantité : " . $quantite . "</li>";
    echo "<li>Total HT : " . $total_ht . " " . DEVISE . "</li>";
    echo "<li>Montant TVA (" . TAUX_TVA . "%) : " . $montant_tva . " " . DEVISE . "</li>";
    echo "<li>Frais de livraison : 15 " . DEVISE . "</li>";
    echo "<li><strong>Total TTC : " . $total_ttc . " " . DEVISE . "</strong></li>";
    echo "</ul>";
    echo "<h3>Vérification :</h3>";
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe bien et vaut " . TAUX_TVA . "%.</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'existe pas.</p>";
    }
    ?>

</body>
</html>