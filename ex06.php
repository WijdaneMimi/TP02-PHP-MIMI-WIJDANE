<?php
echo "<h2>Exercice 6 : Mois en français</h2>";
$numeroMois = 3;
echo "<p><strong>1. Numéro de mois de départ :</strong> $numeroMois</p>";
echo "<p><strong>2. Test avec la valeur fixe ($numeroMois) :</strong> ";

switch ($numeroMois) {
    case 1:
        echo "Janvier";
        break;
    case 2:
        echo "Février";
        break;
    case 3:
        echo "Mars";
        break;
    case 4:
        echo "Avril";
        break;
    case 5:
        echo "Mai";
        break;
    case 6:
        echo "Juin";
        break;
    case 7:
        echo "Juillet";
        break;
    case 8:
        echo "Août";
        break;
    case 9:
        echo "Septembre";
        break;
    case 10:
        echo "Octobre";
        break;
    case 11:
        echo "Novembre";
        break;
    case 12:
        echo "Décembre";
        break;
    default:
        echo "Numéro de mois invalide";
        break;
}
echo "</p>";
echo "<h3>4. Tests des valeurs demandées :</h3>";
$tests = [1, 3, 12, 15];

foreach ($tests as $test) {
    echo "Valeur testée : <strong>$test</strong> => ";
    
    switch ($test) {
        case 1: echo "Janvier"; break;
        case 2: echo "Février"; break;
        case 3: echo "Mars"; break;
        case 4: echo "Avril"; break;
        case 5: echo "Mai"; break;
        case 6: echo "Juin"; break;
        case 7: echo "Juillet"; break;
        case 8: echo "Août"; break;
        case 9: echo "Septembre"; break;
        case 10: echo "Octobre"; break;
        case 11: echo "Novembre"; break;
        case 12: echo "Décembre"; break;
        default: echo "Numéro de mois invalide"; break;
    }
    echo "<br>";
}
echo "<h3>5. Mois actuel du serveur :</h3>";
$moisActuel = (int)date("m");
echo "Numéro du mois actuel : <strong>$moisActuel</strong> => ";
switch ($moisActuel) {
    case 1: echo "Janvier"; break;
    case 2: echo "Février"; break;
    case 3: echo "Mars"; break;
    case 4: echo "Avril"; break;
    case 5: echo "Mai"; break;
    case 6: echo "Juin"; break;
    case 7: echo "Juillet"; break;
    case 8: echo "Août"; break;
    case 9: echo "Septembre"; break;
    case 10: echo "Octobre"; break;
    case 11: echo "Novembre"; break;
    case 12: echo "Décembre"; break;
    default: echo "Numéro de mois invalide"; break;
}
echo "<br><br>";
echo "<em>Vérification : 3 donne Mars, 12 donne Décembre, 15 donne le message d'erreur.</em>";
?>