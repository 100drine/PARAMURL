##Exercice 2 Faire une page index.php. Tester sur cette page que le paramètre age existe et si 
c'est le cas l'afficher sinon le signaler : index.php?nom=Nemareprenom=Jean

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

    <label for = "age">age:</label>
    <input type"text" name="age" id=age">

    
    
    <input type= "submit">
    </form>
<?php

if(isset($_GET["nom"])) {
    echo $_GET["nom"];
}
if(isset($_GET["prenom"])){
    echo $_GET["prenom"];
}
if(isset($_GET["age"])){
    echo $_GET["age"];
    
} 
else {
    echo "il manque ton âge!!!";
}
?>  
</body>
</html>