##Exercice 5 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
existent et les afficher: index.php?sema

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index5.php" method= "get"> 
    
    <label for ="sema"></label>
    <input type ="text" name="sema"id="sema">
    <input type= "submit">
    </form>
<?php

if(isset($_GET["sema"])) {
    echo $_GET["sema"];
}


?>    
</body>
</html>