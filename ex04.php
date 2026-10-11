<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

    <h1>Exercice 4 </h1>
    <?php
    $v1 = 42;
    $v2 = "42";
    $v3 = 15.8;
    $v4 = true;
    $v5 = false;
    $v6 = null;
    echo "<h2>Types des variables</h2>";
    echo "<pre>";
    var_dump($v1);
    var_dump($v2);
    var_dump($v3);
    var_dump($v4);
    var_dump($v5);
    var_dump($v6);
    echo "</pre>";
    echo "<h2>3. Conversions</h2>";   
    $conv1 = (int) 
    $conv2 = (int) 
    $conv3 = (string) 
    echo "<pre>";
    echo "Conversion de \"42\" en entier : \n";
    var_dump($conv1);  
    echo "Conversion de 15.8 en entier : \n";
    var_dump($conv2); 
    echo "Conversion de 42 en chaîne : \n";
    var_dump($conv3);
    echo "</pre>";
    echo "<h2>4. Booléens avec echo et var_dump</h2>"; 
    echo "Affichage avec echo : ";
    echo "true s'affiche comme : '" . $v4 . "' <br>";
    echo "false s'affiche comme : '" . $v5 . "' <br>";  
    echo "<pre>";
    echo "Affichage avec var_dump :\n";
    var_dump($v4);
    var_dump($v5);
    echo "</pre>";
    echo "<h2>5. Conversions en booléen</h2>";
    echo "<pre>";
    echo "0 en booléen : ";
    var_dump((bool) 0);   
    echo "\"0\" en booléen : ";
    var_dump((bool) "0");  
    echo "\"PHP\" en booléen : ";
    var_dump((bool) "PHP");
    echo "Tableau vide en booléen : ";
    var_dump((bool) []);
    echo "</pre>";
    ?>

</body>
</html>