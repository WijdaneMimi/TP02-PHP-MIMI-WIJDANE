# TP02-PHP-MIMI-WIJDANE

TP 02 PHP - Programmation Web 2 - 2026/2027

Nom : MIMI
Prénom : WIJDANE
Groupe : G1
Liste des exercices :
1. Exercice 1
2. Exercice 2
3. Exercice 3
4. Exercice 4
5. Exercice 5
6. Exercice 6
7. Exercice 7
8. Exercice 8
9. Exercice 9
10. Exercice 10
## Explication Exercice 2 (Question 5)

-->Pourquoi `$note` et `$Note` sont différentes ?
En PHP, les noms de variables sont sensibles à la casse(case-sensitive). Cela signifie que `$note`  et `$Note` sont considérées comme deux variables totalement distinctes par le langage. Elles peuvent donc contenir des valeurs différentes (ici 12 et 16) sans entrer en conflit.

-->Identification des noms de variables valides :
En PHP, une variable doit commencer par un `$`, suivi d'une lettre ou d'un caractere soulignee `_`. Elle ne peut pas contenir d'espaces, de caractères spéciaux (comme `!`) et ne peut pas commencer par un chiffre.

Parmi la liste fournie :
*   `$a` -> Valide
*   `$_a` -> Valide
*   `$a_a` -> Valide
*   `$AAA` -> Valide
*   `$a!` -> Invalide (contient un point d'exclamation `!`)
*   `$1a` -> Invalide (commence par un chiffre `1`)
*   `$a1` -> Valide (le chiffre est à la fin, ce qui est autorisé)
## Exercice 10 : Formulaires GET et POST

Partie A - Méthode GET :
Les données sont envoyées dans l'URL. Après envoi, l'URL affiche les valeurs (exemple : ex10_get.php?nom=Mimi&prenom=Wijdane&groupe=G1). Les informations sont visibles par tout le monde.

Partie B - Méthode POST :
Les données sont envoyées dans le corps de la requête. L'URL reste simplement ex10_post.php sans aucune donnée visible. Les informations sont cachées, c'est plus sécurisé.

Partie C - Vérifications :
1. isset() vérifie que les champs nom, prenom et groupe existent. Si on ouvre la page directement, un message d'erreur s'affiche.
2. trim() enlève les espaces inutiles et empty() refuse les champs vides.
3. htmlspecialchars() protège l'affichage contre le code malveillant .

Tests effectués :
Formulaire complet : message de bienvenue affiché.
Formulaire incomplet : message d'erreur.
Accès direct sans formulaire : message accès interdit.