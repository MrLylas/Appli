<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>

<!------------------------------- Barre de menu ------------------------------------------------->
            <nav class="navBar">
                <div class="accessRecap"><a href="recap.php">Recap</a></div>
                <div class="accessIndex"><a href="index.php">Index</a></div>
            </nav>
<!------------------------------- Titre -------------------------------------------------------->
        <h1>Ajouter un produit</h1>    
        
<!---------------- Récuperation du fichier traitement et methode de transmission de données ---->
<!---------------------- Mise en place du formulaire : ---------------------------------------->
    <div class="container">
        <form class="carte glass" action="traitement.php" method="post">
            <p >
<!------------------------ Entrer le nom du produit--------------------------------------------->
                <label>
                    Nom du produit :
                    <input type="text" name="name">
                </label>
            </p>
<!------------------------- Entrer le prix du produit ------------------------------------------>
            <p >
                <label>
                    Prix du produit :
                    <input type="number" step="any" name="price">
                </label>
            </p>
<!------------------------ Entrer la quantité de produits---------------------------------------->
            <p >
                <label>
                    Quantité désirée :
                    <input type="number" name="qtt" value="1">
                </label>
            </p>
<!------------------------------ SUBMIT --------------------------------------------------------->
            <p >
                <input type="submit" name="submit" value="Ajouter le produit">
            </p>
        </form>
    </div>
        <tr>
            <td>Total Produits</td>
            <td><strong></strong></td>
        </tr>
    </body>
</html>
