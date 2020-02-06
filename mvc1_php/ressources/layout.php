<!--
    Elements visuels communs à toutes les pages.
    On peut par exemple placer ici un menu de navigation, element qui doit être visible et utilisable où qu'on soit sur le site.
-->
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href='ressources/style/style.css'  type="text/css"/>
    </head>
    <body>
        <!-- Ici on peut inserer du contenu en fonction de la page -->
        <h1> <?= $title ?> </h1>
        <div> <?= $contenu ?></div>
        <ul>
            <li><a href='index.php'> Index </a></li>
            <li><a href='commentaires.php'> Commentaires </a></li>
        </ul>
    </body>
</html>