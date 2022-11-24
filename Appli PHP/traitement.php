<?php

session_start();


switch ($_GET['action']) {
    case 'addProduct':
        if (isset($_POST['submit'])) {
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
            $price = max($price, 0);
            $qtt = max($qtt, 0);
            if($price == 0 || $qtt == 0){
                unset($price);
                unset($qtt);
                unset($name);
            }
            if ($name && $price && $qtt) {
                $product = [
                    "name" => $name,
                    "price" => $price,
                    "qtt" => $qtt,
                    "total" => $price * $qtt
                ];
                $_SESSION['products'] []= $product;
                $_SESSION['message'] = $name." à été ajouté !";
                $_SESSION['color'] = "green";
            }else{
                $_SESSION['message'] = "Erreur formulaire incomplet!!!";
                $_SESSION['color'] = "red";
            }
        }
    header("Location:index.php");
    break;

    case 'plus':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $_SESSION['products'][$id]['qtt']++;
        $_SESSION['products'][$id]['total'] += $_SESSION['products'][$id]['price'];
        $_SESSION['message'] = "La quantité ".$_SESSION['products'][$id]['name']." à été modifié !";
        $_SESSION['color'] = "grey";
    header("Location:recap.php");
    break;

    case 'moins':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($_SESSION['products'][$id]['qtt'] > 1){
        $_SESSION['products'][$id]['qtt']--;
        $_SESSION['products'][$id]['total'] -= $_SESSION['products'][$id]['price'];
        $_SESSION['message'] = "La quantité ".$_SESSION['products'][$id]['name']." à été modifié !";
        $_SESSION['color'] = "grey";
        }else{
            $_SESSION['message'] = "L'article ".$_SESSION['products'][$id]['name']." à été supprimé !";
            $_SESSION['color'] = "red";
            unset($_SESSION['products'][$id]);
        }
    header("Location:recap.php");
    break;

    case 'removeProduct':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        unset($_SESSION['products'][$id]);
        $_SESSION['message'] = "L'article ".$_SESSION['products'][$id]['name']." à été supprimé !";
        $_SESSION['color'] = "red";
    header("Location:recap.php");
    break;

    case 'removeAll':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $_SESSION['message'] = "Le panier à été supprimé !";
        $_SESSION['color'] = "red";
        unset($_SESSION['products']);
    header("Location:recap.php");
    break;

}

?>