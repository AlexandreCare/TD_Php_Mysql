<?php
    include "fonction.php";
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../menu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice1</title>
    </head>
    <body>
    <?php
        include "../menu.php";
    ?>
        <?php
            tableau1("Bonjour","Bon appétit","Au revoir")
        ?>
        <p>bla bla bla</p>
        <?php
            tableau1("Donald","Joe","Macron");
            highlight_file(__FILE__);
        ?>
    </body>
</html>