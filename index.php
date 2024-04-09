<?php
    $active = 'Home';
    include("includes/header.php");
?>
    <main>
        <div class="bg-image d-flex justify-content-center align-items-flex-start banner"
            style=" background-image: url('images/home.jpg'); background-size: cover; background-position:bottom; background-color: darkslategray; background-blend-mode: multiply; height: 80vh; padding: 8rem 0">
                <div class="holder flex-center">
                <div class="banner-text">
                    <h1>Temukan <span>FURNITUR</span> Terbaik untuk Anda!</h1>
                    <a href="<?php echo isset($_SESSION['user']) ? 'shop.php' : 'login.php'; ?>" id="banner-btn">
                        <?php echo isset($_SESSION['user']) ? 'Lihat semua produk' : 'Masuk/Daftar untuk Melihat Semua Produk'; ?>
                    </a>
                </div>

                </div>
        </div>

        <div id="advantages">
            <div class="holder">
                <div class="d-flex align-items-stretch">
                    <div class="col-sm-4">
                        <div class="box h-100">
                            <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            </div>
                            <h3>Kami Mencintai Pelanggan Kami</h3>
                            <p>Kami akan Memberikan Layanan Terbaik yang Pernah Ada</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box h-100">
                            <div class="icon">
                            <i class="fa-solid fa-tag"></i>
                            </div>
                            <h3>Harga Terbaik</h3>
                            <p>Anda dapat Menemukan Berbagai Macam Produk dengan Harga yang Terjangkau Disini.</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box h-100">
                            <div class="icon">
                            <i class="fa-solid fa-thumbs-up"></i>
                            </div>
                            <h3>100% Produk Asli</h3>
                            <p>Kami Hanya Menawarkan Produk Terbaik dan Asli di Seluruh Dunia.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <div id="latest">
        <div class="latest-box col-md-12">
            <div class="holder">
                <h2>
                    Produk Terbaru Kami
                </h2>
            </div>
        </div>
    </div>

    <div id="content" class="holder">
        <div class="row">
            <?php
            // Panggil fungsi untuk mendapatkan produk terbaru
            if (isset($_SESSION['user'])) {
                getPro($_SESSION['user']); // Sertakan argumen $_SESSION['user'] di sini
            } else {
                // Tampilkan produk dengan tautan ke halaman login
                echo "<p>Silahkan <a href='login.php'>login</a> untuk Melihat Produk!</p>";
            }
            ?>
        </div>
    </div>

    <?php
    include("includes/footer.php");
    ?>
</main>

</body>
</html>
