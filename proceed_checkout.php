<?php
    $active = 'Cart';
    include("includes/header.php");

    // Fungsi untuk menampilkan informasi pembayaran
    function displayPaymentInfo($nama, $phone, $alamat, $email, $catatan) {
        echo "<div class='alert alert-success'>Pesanan sedang diproses. Silahkan melakukan pembayaran ke rekening BNI no rek 2356543.<br>";
        echo "Terima kasih atas pesanannya, $nama!<br>";
        echo "Nomor HP: $phone<br>";
        echo "Alamat: $alamat<br>";
        echo "Email: $email<br>";
        echo "Catatan: $catatan</div>";
    }

    // Jika tombol submit ditekan
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $phone = $_POST['phone'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $catatan = $_POST['catatan'];
        // Menampilkan informasi pembayaran
        displayPaymentInfo($nama, $phone, $alamat, $email, $catatan);
        // Menampilkan alert menggunakan JavaScript
        echo "<script>alert('Pesanan Berhasil diproses. Silahkan lakukan Pembayaran Pada Bank BNI No. Rek 254738.');</script>";
    }
?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <form action="cart.php" method="post" style="margin-top: 30px;"> <!-- Tambahkan margin-top langsung ke formulir -->
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required> <!-- Tambahkan atribut required -->
                </div>
                <div class="form-group">
                    <label for="phone">Nomor HP:</label>
                    <input type="text" class="form-control" id="phone" name="phone" required> <!-- Tambahkan atribut required -->
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" required></textarea> <!-- Tambahkan atribut required -->
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required> <!-- Tambahkan atribut required -->
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan:</label>
                    <textarea class="form-control" id="catatan" name="catatan"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" onclick="showAlert()">Kirim</button> <!-- Ganti nama tombol menjadi "submit" -->
            </form>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
<script>
    function showAlert() {
        alert('Pesanan Berhasil diproses. Silahkan lakukan Pembayaran Pada Bank BNI No. Rek 254738.');
    }
</script>
