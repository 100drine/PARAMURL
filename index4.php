##Exercice 4 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL
existent et les afficher: index.php?langage=PHP&serveur=LAMP

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index4.php" method= "get"> 
    
    <label for ="namelangage">langage=</label>
    <input type ="text" name="langage"id="langage">
    
    <label for = "serveur">serveur=</label>
    <input type ="text" name="serveur" id="serveur">


    
    
    <input type= "submit">
    </form>
<?php

if(isset($_GET["langage"])) {
    echo $_GET["langage"];
}
if(isset($_GET["serveur"])){
    echo $_GET["serveur"];
}

?>    
</body>
</html>