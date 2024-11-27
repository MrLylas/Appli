<?php
// Fonction sessions_start permettant de démarrer un session ou récupérer la session de ce même utilisateur :
    session_start();
    ob_start();

//Ajouter/Retirer ou supprimer

// if(isset($_GET[]))

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
                        "<th>Ajouter/Retirer</th>",
                        "<th>Supprimer</th>",

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
                    "<td><a href='traitement.php?action=up-qtt&id=$index'>+</a><a href='traitement.php?action=down-qtt&id=$index'>-</a></td>",
                    "<td><a href='traitement.php?action=delete&id=$index'>Supprimer</a></td>",
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
            "</tbody>",
            "</table>";
            "</div>";
        }
//Supprimer un produit 

        ?>
        <button></button>
        <script>
            if (document.title != "Recap") {
                 document.title = "Recap";
                }
        </script>
        <?php
        $content = ob_get_clean();
        
        require_once 'template.php';
    ?>