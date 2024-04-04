<div id="footer">
    <div class="holder">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3">
                <h4>Halaman</h4>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="index.php">Tentang Kami</a></li>
                    <?php if(isset($_SESSION['user'])): ?>
                        <li><a href="shop.php">Belanja</a></li>
                        <li><a href="cart.php">Keranjang</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Belanja </a></li>
                        <li><a href="login.php">Keranjang </a></li>
                    <?php endif; ?>
                </ul>
                
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>

            <div class="com-sm-6 col-md-3">
            <h4>Kategori Produk Teratas</h4>
            <ul>
                <?php 
                    $get_p_categories = "select * from product_categories";
                    $run_p_categories = mysqli_query($db, $get_p_categories);
                    
                    while($row_p_categories=mysqli_fetch_array($run_p_categories)){
                        $p_category_id = $row_p_categories['p_category_id'];
                        $p_category_title = $row_p_categories['p_category_title'];

                        // Periksa apakah pengguna sudah login
                        if(isset($_SESSION['user'])){
                            echo "
                                <li>
                                    <a href ='shop.php?p_categories=$p_category_id'>
                                        $p_category_title
                                    </a>
                                </li>
                            ";
                        } else {
                            // Jika pengguna belum login, arahkan ke halaman login
                            echo "
                                <li>
                                    <a href ='login.php'>
                                        $p_category_title
                                    </a>
                                </li>
                            ";
                        }
                    }
                ?>
            </ul>
            <hr class="hidden-md hidden-lg">
        </div>


            <div class="col-sm-6 col-md-2">
                <h4>Media Sosial</h4>
                <p class="social">
                    <a href="https://www.facebook.com/IstimewaPremiumFurniture?mibextid=ZbWKwL" class="fa-brands fa-facebook-f"></a>
                    <a href="https://www.instagram.com/istimewa_furniture?igsh=MXNmdjY4ZnE1YmRvNg==" class="fa-brands fa-instagram"></a>
                    <a href="https://www.lalamove.com/id/blog/pengiriman-furniture-rumah-minimalis/" class="fa-brands fa-square-google-plus"></a>
                </p>
            </div>
        </div>
    </div>
</div>
