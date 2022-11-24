<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title> Ajouter un produit</title>
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
            <h1 class="nav-link">Acceuil</h1>
        </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-md-3 dual-collapse2 h2">
    <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
        <ul class="navbar-nav ms-auto me-5 bg-dark border border-light rounded ">
            <a href="recap.php" class="bg-dark text-secondary m-2 text-decoration-none">Panier 
                <span class="badge bg-secondary">
                    <?php
                    session_start();
                    if(isset($_SESSION['products'])){
                        echo count($_SESSION['products']);
                    }else{
                        echo "0";
                    }
                    ?>
                </span>
            </a> 
        <button type="button" class="bg-dark dropdown-toggle dropdown-toggle-split text-secondary" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <li class="dropdown">
            <ul class="dropdown-menu bg-transparent border-0 dropdown-menu-lg-end mt-4" aria-labelledby="navbarDarkDropdownMenuLink">
                <?php
                if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
                    echo "<div class='d-flex border border-dark rounded-5 bg-light m-5'><h1 class='m-5 text-secondary'>Aucun produit en session ...</h1></div>";
                }else{
                    echo "<div class='d-flex'><div class='d-flex bg-light border border-dark rounded-5 m-5'><table class='m-5 table table-bordered'>".
                            "<thead class='text-secondary h3'>".
                                "<tr>".
                                    "<th>#</th>".
                                    "<th>Nom</th>".
                                    "<th>Prix</th>".
                                    "<th>Quantité</th>".
                                    "<th>Total</th>".
                                "</tr>".
                            "</thead>".
                        "<tbody>";
                    $totalGeneral = 0;
                    foreach($_SESSION['products'] as $index => $product){
                        echo "<tr>".
                                "<td>".$index."</td>".
                                "<td>".$product['name']."</td>".
                                "<td>".number_format($product['price'],2, ",", "&nbsp;")."&nbsp;€</td>".
                                "<td>".$product['qtt']."</td>".
                                "<td>".number_format($product['total'],2, ",", "&nbsp;")."&nbsp;€</td>".
                            "</tr>";
                        $totalGeneral += $product['total'];
                    }
                    echo "<tr>".
                            "<td colspan=4>Total général : </td>".
                            "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>".
                            "</tr>".
                        "</tbody></table></div></div>";
                        }
                ?>
                </ul>
            </li>
        </ul>
    </div>
    </div>
    </div>
    </nav>
<?php
if(isset($_SESSION['message'])){
echo "<p style='color:white;text-align:center;background-color:".$_SESSION['color']."'>".$_SESSION['message']."</p>";
unset($_SESSION['message']);
unset($_SESSION['color']);
}   
?>
    <div class="d-flex">
        <form class="bg-light m-5 border border-dark rounded-5" action="traitement.php?action=addProduct" method="post">
        <div class="m-5">
        <div class="m-2">
            <h1 class="text-secondary">Ajouter un produit</h1>
        </div>
        <div class="mb-3 mt-3">
            <label for="nom">Nom du produit :</label>
            <input type="text" class="form-control" placeholder="Nom du produit" name="name">
        </div>
        <div class="mb-3">
            <label for="prix">Prix du produit :</label>
            <input type="number" class="form-control" placeholder="Prix du produit" name="price" step ='0.01' min="0.01">
        </div>    
        <div class="mb-3">
            <label for="prix">Quantité désiré :</label>
            <input type="number" class="form-control" name="qtt" value="1" min="1">  
        </div>
            <input type="submit" class="btn btn-secondary" name="submit" value="Ajouter au panier">
        </div>
        </div>
        </form>
    </div>
    </body>
</html>