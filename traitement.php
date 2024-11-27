<?php

    session_start();

    if(isset($_GET['action'])){
        switch($_GET['action']){

            case "add":

                if(isset($_POST['submit'])){
        
        
                $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
                $qtt = filter_input(INPUT_POST,"qtt",FILTER_VALIDATE_INT);
        
        
                if($name && $price && $qtt){
        
        
                    $product = [
                        "name"  => $name,
                        "price" => $price,
                        "qtt"   => $qtt,
                        "total" => $price*$qtt
                    ];
                    
                    $_SESSION['products'][]=$product;
                    
                    $_SESSION['alert'] = "<p>Produit ajouté</p>";
                    
                }else{
                    $_SESSION['alert'] = "<p>Formulaire non conforme</p>";
                    header("Location:index.php");
                }
                header("Location:index.php");
            }
            break; 
            
            case "delete":
                if (isset($_GET["id"])) {
                    $index = $_GET["id"];
                    unset($_SESSION['products'][$index]);
                    header("Location:recap.php");
                }
                break;
                
                case "upqtt":
                    if(isset($_GET["id"])){
                        $index = $_GET["id"];
                        $_SESSION['products'][$index]['qtt']++;
                        $index = $_GET["id"];
                        $_SESSION['products'][$index]['price'];
                        header("location:recap.php");
                    }
                    break;
                    
                    case "downqtt":
                        if(isset($_GET["id"])){
                            $index = $_GET["id"];
                            $_SESSION['products'][$index]['qtt']--;
                            header('location:recap.php');
                        }
                        break;
                        
                    }
                }
                
                
      