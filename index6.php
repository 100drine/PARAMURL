##Exercice 6 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
existent et les afficher: index.php?batiment=12&salle=101

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index6.php" method= "get"> 
    
    <label for ="batiment">batiment</label>
    <input type ="text" name="batiment"id="batiment">
    <label for = "salle">salle</label>
    <input type ="text" name="salle" id="salle">
    <input type= "submit">
    </form>
<?php

if(isset($_GET["batiment"])) {
    echo $_GET["batiment"];
}
if(isset($_GET["salle"])){
    echo $_GET["salle"];
}

?> 
</body>
</html>