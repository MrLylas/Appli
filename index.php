<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
    <body>

<!---------------------- Mise en place du formulaire : ---------------------------------------->

        <h1>Ajouter un produit</h1>

<!---------------- Récuperation du fichier traitement et methode de transmission de données ---->

        <form action="traitement.php" method="post">
            <p>
<!------------------------ Entrer le nom du produit--------------------------------------------->
                <label>
                    Nom du produit :
                    <input type="text" name="name">
                </label>
            </p>
<!------------------------- Entrer le prix du produit ------------------------------------------>
            <p>
                <label>
                    Prix du produit :
                    <input type="number" step="any" name="price">
                </label>
            </p>
<!------------------------ Entrer la quantité de produits---------------------------------------->
            <p>
                <label>
                    Quantité désirée :
                    <input type="number" name="qtt" value="1">
                </label>
            </p>
<!------------------------------ SUBMIT --------------------------------------------------------->
            <p>
                <input type="submit" name="submit" value="Ajouter le produit">
            </p>
        </form>

    </body>
</html>
