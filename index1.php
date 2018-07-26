/*#PHP - Les paramètres d'URL ##Exercice 1 Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?nom=Nemare&prenom=Jean*/


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/" method= "get"> 
    
    <label for ="name">nom:</label>
    <input type ="text" name="nom"id="name">
    
    <label for = "prenom">prénom:</label>
    <input type ="text" name="prenom" id="prenom">

    
    
    <input type= "submit">
    </form>
<?php

if(isset($_GET["nom"])) {
    echo $_GET["nom"];
}
if(isset($_GET["prenom"])){
    echo $_GET["prenom"];
}

?>

</body> 
</html>