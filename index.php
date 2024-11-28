<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter produit</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>

<!------------------------------- Titre -------------------------------------------------------->
        <h1>Ajouter un produit</h1>    
        
<!---------------- Récuperation du fichier traitement et methode de transmission de données ---->
<!---------------------- Mise en place du formulaire : ---------------------------------------->
    <div class="container">
        <form class="carte glass" action="traitement.php?action=add" method="post">
            <div class="formBox">
            <p >
<!------------------------ Entrer le nom du produit--------------------------------------------->
                <label>
                    Nom du produit :
                    <br><input type="text" name="name">
                </label>
            </p>
<!------------------------- Entrer le prix du produit ------------------------------------------>
            <p >
                <label>
                    Prix du produit :
                    <br><input type="number" step="any" name="price">
                </label>
            </p>
<!------------------------ Entrer la quantité de produits---------------------------------------->
            <p >
                <label>
                    Quantité désirée :
                    <br><input type="number" name="qtt" value="1">
                </label>
            </p>
<!------------------------------ SUBMIT --------------------------------------------------------->
            <p >
                <br><input type="submit" name="submit" value="Ajouter le produit">
            </p>
            </div>
            <img src="118089.png" alt="Cart pic">
        </form>
    </div>
<!-------------------------------- Changement du title de la page ------------------------------->
        <script>
            if (document.title != "Ajouter produit") {
                 document.title = "Ajouter produit";
                }
        </script>
        <?php
              if (isset($_SESSION["alert"])) {
                echo $_SESSION["alert"];
                unset($_SESSION["alert"]);
            }
            
        $content = ob_get_clean();
        
        require_once 'template.php';
        ?>
    </body>
</html>
