##Exercice 3 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index3.php" method= "get"> 
    
    <label for ="start">dateDebut:</label>
    <input type ="date" name="dateDebut"id="start"
    value="2/05/2016">
    
    <label for = "end">dateFin:</label>
    <input type ="date" name="dateFin" id="end">
    value="27/11/2016"

    
    
    <input type= "submit">
    </form>
<?php

if(isset($_GET["dateDebut"])) {
    echo $_GET["dateDebut"];
}
if(isset($_GET["dateFin"])){
    echo $_GET["dateFin"];
}

?>

</body> 
</html>