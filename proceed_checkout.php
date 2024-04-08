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

        // Periksa apakah semua inputan telah diisi
        if(empty($nama) || empty($phone) || empty($alamat) || empty($email)) {
            echo "<script>alert('Wajib Diisi');</script>";
        } else {
            // Menampilkan informasi pembayaran jika inputan tidak kosong
            displayPaymentInfo($nama, $phone, $alamat, $email, $catatan);
            // Menampilkan alert menggunakan JavaScript
            echo "<script>alert('Pesanan sedang diproses. Silahkan melakukan pembayaran ke rekening BNI no rek 2356543.');</script>";
        }
    }
?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <form action="cart.php" method="post" style="margin-top: 30px;" onsubmit="return validateForm()"> <!-- Tambahkan onsubmit event handler -->
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
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button> <!-- Ganti nama tombol menjadi "submit" -->
            </form>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>

<script>
    function validateForm() {
        // Mendapatkan nilai dari input
        var nama = document.getElementById('nama').value;
        var phone = document.getElementById('phone').value;
        var alamat = document.getElementById('alamat').value;
        var email = document.getElementById('email').value;

        // Periksa apakah semua inputan telah diisi
        if(nama == "" || phone == "" || alamat == "" || email == "") {
            alert("Wajib Diisi");
            return false; // Menghentikan pengiriman form
        } else {
            // Tampilkan pesan "Pesanan sedang diproses"
            alert("Pesanan sedang diproses. Silahkan melakukan pembayaran ke rekening BNI no rek 2356543.");
            return true; // Mengizinkan pengiriman form
        }
    }
</script>
