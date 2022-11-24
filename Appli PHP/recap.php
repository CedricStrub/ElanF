<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-secondary navbar-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 h2">
        <ul class="navbar-nav ms-5 ps-auto bg-dark border border-light rounded">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Acceuil</a>
        </li>
        </ul>
    </div>
    <div class="d-flex justify-content-center navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 h1">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <h1 class="nav-link">Panier</h1>
        </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 h2">
        <ul class="navbar-nav me-5 ms-auto bg-dark border border-light rounded">
        <li class="nav-item">
            <a class="nav-link " href="recap.php">Panier
            <span class="badge bg-secondary">
                <?php
                if(isset($_SESSION['products'])){
                    echo count($_SESSION['products']);
                }else{
                    echo "0";
                }
                ?>
            </span>
            </a>
        </li>
        </ul>
    </div>
</nav>
<?php
 if(isset($_SESSION['message'])){
    echo "<p style='color:white;text-align:center;background-color:".$_SESSION['color']."'>".$_SESSION['message']."</p>";
    unset($_SESSION['message']);
    unset($_SESSION['color']);
}
if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
    echo "<div class='d-flex justify-content-center m-5'><h1 class='m-5 text-secondary'>Aucun produit en session ...</h1></div>";
}else{
    echo "<div class='d-flex justify-content-center '>
    <div class='d-flex bg-light border border-dark rounded-5 m-5'>
    <table class=' m-5 table table-bordered'>".
            "<thead class='text-secondary h3'>".
                "<tr>".
                    "<th>#</th>".
                    "<th>Nom</th>".
                    "<th>Prix</th>".
                    "<th>Quantité</th>".
                    "<th>Total</th>".
                    "<th>Del</th>".
                "</tr>".
            "</thead>".
        "<tbody>";
    $totalGeneral = 0;
    foreach($_SESSION['products'] as $index => $product){
        echo "<tr>".
                "<td>".$index."</td>".
                "<td>".$product['name']."</td>".
                "<td>".number_format($product['price'],2, ",", "&nbsp;")."&nbsp;€</td>".
                "<td class='d-flex justify-content-evenly'><a href='traitement.php?action=moins&id=".$index."'class='text-dark h5 text-decoration-none'><kbd class='bg-secondary'>-</kbd> </a>".
                $product['qtt'].
                "<a href='traitement.php?action=plus&id=".$index."' class='text-dark h5 text-decoration-none'> <kbd class='bg-secondary'>+</kbd></a></td>".
                "<td>".number_format($product['total'],2, ",", "&nbsp;")."&nbsp;€</td>".
                "<td><a href='traitement.php?action=removeProduct&id=".$index."'class='text-decoration-none'>🗑</a></td>".
            "</tr>";
        $totalGeneral += $product['total'];
    }
    echo "<tr>".
            "<td colspan=4>Total général : </td>".
            "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>".
            "<td><a href='traitement.php?action=removeAll'class='text-decoration-none'>🗑</a></td>".
            "</tr>".
        "</tbody></table></div></div>";
        }        
?>
</body>
</html>