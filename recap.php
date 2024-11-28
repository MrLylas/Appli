<?php
// Fonction sessions_start permettant de démarrer une session ou récupérer la session de ce même utilisateur :
session_start();
ob_start();


// Si aucun produit :
if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
    echo "<p>Aucun produit en session...</p>";
} else {
// Entête du tableau :
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
            "</tr>", 
            "</thead>",
            "<tbody>";
    
// Initialisation du total général :
    $totalGeneral = 0;
    $totalProduct = 0;

// Pour chaque session, afficher les résultats du tableau + calculer le total général 
    foreach($_SESSION['products'] as $index => $product){

        if (isset($product['name'], $product['price'], $product['qtt'], $product['total'])) {
            $price = floatval($product['price']);
            $total = floatval($product['total']);
            $qtt = intval($product['qtt']);

            $prixQtt = number_format(floatval($product['price']), 2, ",", "&nbsp;");
            $prixTotal = number_format(floatval($product['total']), 2, ",", "&nbsp;");

        echo 
        
            "<tr>",
                "<td>".$index."</td>",
                "<td>".$product['name']."</td>",
                "<td>".$prixQtt."&nbsp;€</td>",
                "<td>".$product['qtt']."</td>",
                "<td>".$prixTotal."&nbsp;€</td>",
                "<td><a class='bouton plus' href='traitement.php?action=upqtt&id=$index'>+</a>&nbsp;<a class='bouton moins' href='traitement.php?action=downqtt&id=$index'>-</a></td>",
                "<td><a class='bouton suppr' href='traitement.php?action=delete&id=$index'>Supprimer</a></td>",
            "</tr>";

        
// Calculer le total général :
        $totalGeneral += $total;
        $totalProduct += $qtt;
    }

}
    
// Affichage du total général :
    echo "<tr>",
        "<td>Prix Total</td>",
        "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
        "</tr>",
        "</tbody>",
        "</table>",
        "</div>";
    }
    ?>
<script>
    if (document.title != "Recap") {
        document.title = "Recap"; // Modifier le titre de la page
    }
</script>

<?php
$content = ob_get_clean();
require_once 'template.php';
?>
