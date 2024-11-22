<?php
// Fonction sessions_start permettant de démarrer un session ou récupérer la session de ce même utilisateur :

    session_start();

//Verification de l'existance de la clé submit:

    if(isset($_POST['submit'])){
        
//Application de filtres sur nos input :

        $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $price = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $qtt = filter_input(INPUT_POST,"qtt",FILTER_VALIDATE_INT);

//Verifications du bon fonctionnement des filtres 

        if($name && $price && $qtt){

//Si bon fonctionnement alors construire tableau associatif $product :

            $product = [
            "name"  => $name,
            "price" => $price,
            "qtt"   =>$qtt,
            "total" =>$price*$qtt
            ];

//Enregistrement du produit nouvellement créé en session :

            $_SESSION['products'][]=$product;
        }
    }

    header("Location:index.php");