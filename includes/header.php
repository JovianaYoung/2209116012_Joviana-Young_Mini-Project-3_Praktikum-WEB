 <?php
    include("includes/database.php");
    include("includes/functions.php"); 
?>

<?php
if(isset($_GET['pro_id'])){
    $product_id = $_GET['pro_id'];
    $get_product = "select * from products where product_id = '$product_id'";
    $run_product = mysqli_query($con, $get_product);
    $row_product = mysqli_fetch_array($run_product);
    $p_category_id = $row_product['p_category_id'];
    $pro_title = $row_product['product_title'];
    $pro_price = $row_product['product_price'];
    $pro_desc = $row_product['product_description'];
    $pro_image1 = $row_product['product_image1'];
    $pro_image2 = $row_product['product_image2'];
    $pro_image3 = $row_product['product_image3'];

    $get_p_categories = "select * from product_categories where p_category_id = '$p_category_id'";
    $run_p_categories = mysqli_query($con, $get_p_categories);
    $row_p_categories = mysqli_fetch_array($run_p_categories);
    $p_category_title = $row_p_categories['p_category_title'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        .menu li {
            padding-right: 33px; /* Menambahkan ruang antara kata-kata */
        }

        .menu li:last-child {
            padding-right: 0; /* Menghapus padding pada elemen terakhir */
        }
    </style>

    <title>Dashboard Pengguna</title>
</head>
<body>
    <div id="top">
        <div class="holder row-flex">
            <a href="index.php" class="logo-container"><img class="logo" src="images/logo-furniture.jpg" id="logo"></a>
            <ul class="menu">
                <li class="<?php if($active == 'Beranda') echo "active"; ?>">
                    <a href="index.php">Beranda</a>
                </li>
                <li  class="<?php if($active == 'Belanja') echo "active"; ?>">
                    <a href="shop.php">Belanja</a>
                </li>

                <li>
                <?php
                session_start();
                if (isset($_SESSION["user"])) {

                    echo "<a href='logout.php'>Keluar</a>";
                }
                else {
                    echo "<a href='login.php'>Masuk</a>";
                }
                
                ?>
                 </li>
                <li  class="<?php if($active == 'Keranjang') echo "active"; ?>">
                    <a href="cart.php">Keranjang</a>
                </li>
            </ul>
        </div>
    </div>