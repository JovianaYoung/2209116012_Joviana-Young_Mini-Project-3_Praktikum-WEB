<?php
    $active = 'Cart';
    include("includes/header.php");

    // Cek apakah pengguna sudah login
    if (!isset($_SESSION['user'])) {
        // Jika belum, redirect ke halaman login
        header("Location: login.php");
        exit; // Pastikan tidak ada kode yang dieksekusi setelah redirect
    }
?>  

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Cart</li>
            </ul>
        </div>

        <div id="cart" class="col-md-9 w-100">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart/form-data">
                    <h1>Shopping Cart</h1>
                    <?php
                        $ip_add = getRealIpUser();
                        $select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                    ?>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub-Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $total = 0;
                                    while($row_cart = mysqli_fetch_array($run_cart)){
                                        $pro_id = $row_cart['p_id'];
                                        $pro_qty = $row_cart['qty'];
                                        
                                        $get_products = "SELECT * FROM products WHERE product_id = $pro_id";
                                        $run_products = mysqli_query($con, $get_products);
                                        
                                        while($row_products = mysqli_fetch_array($run_products)){
                                            $product_title = $row_products['product_title'];
                                            $product_image1 = $row_products['product_image1'];
                                            $product_price = $row_products['product_price'];

                                            $sub_total = $product_price * $pro_qty;
                                            $total += $sub_total;
                                ?>
                                <tr>
                                    <td><img class="img-responsive" src="product_images/<?php echo $product_image1; ?>" alt="#"></td>
                                    <td><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a></td>
                                    <td><?php echo $pro_qty; ?></td>
                                    <td><?php echo '$' . $product_price; ?></td>
                                    <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                                    <td><?php echo '$' . $sub_total; ?></td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total</th>
                                    <th colspan="2"><?php echo '$' . $total; ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="index.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue Shopping</a>
                        </div>

                        <div class="pull-right">
                            <button type="submit" name="update" value="Update Cart" class="btn btn-default"><i class="fa fa-refresh"></i> Update Cart</button>
                            <!-- <a href="proceed_checkout.php" class="btn btn-primary">Proceed Checkout <i class="fa fa-chevron-right"></i></a> -->
                            <a href="proceed_checkout.php" class="btn btn-primary" onclick="showTotalPrice()">Proceed Checkout <i class="fa fa-chevron-right"></i></a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
            function update_cart(){
                global $con;
                if(isset($_POST['update'])){
                    foreach($_POST['remove'] as $remove_id){
                        $delete_product = "DELETE FROM cart WHERE p_id = '$remove_id'";
                        $run_delete = mysqli_query($con, $delete_product);
                        if($run_delete){
                            echo "<script>window.open('cart.php', '_self')</script>";
                        }
                    }
                }
            }

            echo @$up_cart = update_cart();
        ?>
        
        <div class="col-md-3">
            <div id="order-summary" class="box">
                <div class="box-header">
                    <h3>Order Summary</h3>
                </div>

                <p class="text-muted">Shipping and additional costs are calculated based on value you have entered</p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Sub-Total</td>
                                <td><?php echo '$' . $total; ?></td>
                            </tr>
                            <tr>
                                <td>Shipping and Handling</td>
                                <td>$15</td>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th><?php echo '$' . ($total + 15 + 5); ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
