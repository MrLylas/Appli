<?php
// Fonction sessions_start permettant de démarrer un session ou récupérer la session de ce même utilisateur :
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Récapitulatif des produits</title>
</head>
<body>
    <nav class="navBar">
        <div class="accessRecap"><a href="recap.php">Recap</a></div>
        <div class="accessIndex"><a href="index.php">Index</a></div>
    </nav>
    <?php 

// Si aucun produit :

    if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
        echo "<p>Aucun produit en session...</p>";
// Entete du tableau :
    }else{
            echo "<div class='container'>",
                    "<table class='carte glass'>",
                    "<thead>",
                    "<tr>",
                        "<th>#</th>",
                        "<th>Nom</th>",
                        "<th>Prix</th>",
                        "<th>Quantité</th>",
                        "<th>Total</th>",
                    "<tr>",
                    "</thead>",
                    "<tbody>";
//Initialisation du total général :
        $totalGeneral = 0;
        $totalProduct = 0;
//Pour chaque session afficher résultats tableau + calculer total général 
        foreach($_SESSION['products'] as $index => $product){
            echo "<tr>",
                    "<td>".$index."</td>",
                    "<td>".$product['name']."</td>",
                    "<td>".number_format($product['price'],2,",", "&nbsp;")."&nbsp;€</td>",
                    "<td>".$product['qtt']."</td>",
                    "<td>".number_format($product['total'],2,",", "&nbsp;")."&nbsp;€</td>",
                "</tr>";
//Calculer total général :
            $totalGeneral+=$product['total'];
            $totalProduct+=$product['qtt'];
        }
//Affichage du total général :
        echo "<tr>",
                "<td>Prix Total</td>",
                "<td><strong>".number_format($totalGeneral,2,",", "&nbsp;")."&nbsp;€</strong></td>",
            "</tr>",
            "<tr>",
                "<td>Total Produits</td>",
                "<td><strong>".$totalProduct."&nbsp;</strong></td>",
            "</tr>",
            "</tbody>",
            "</table>";
            "</div>";
        }
    ?>
</body>
</html>