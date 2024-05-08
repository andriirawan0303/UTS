<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<style>

</style>
<body>
<h2>Input Data Piala Asia U-23 Group A</h2>
    <div class="container">
    
    <form method="post">
        <label for="nama">Nama Negara:</label>
        <select name="negara" id="negara">
            <option value="Qatar U-23">Korea Selatan U-23</option>
            <option value="Indonesia U-23">Jepang U-23</option>
            <option value="Australia U-23">Tiongkok U-23</option>
            <option value="Yordania U-23">Uni Emirat Arab U-23</option>
        </select>
        <br>
        <br>

        <label for="pertandingan">Jumlah Pertandingan (P):</label>
        <input type="number" name="pertandingan" id="matches"><br><br>
        <label for="menang">Jumlah Menang (M):</label>
        <input type="number" name="menang" id="wins"><br><br>
        <label for="seri">Jumlah Seri (S):</label>
        <input type="number" name="seri" id="draws"><br><br>
        <label for="kalah">Jumlah Kalah (K):</label>
        <input type="number" name="kalah" id="losses"><br><br>
        <label for="operator">Nama Operator:</label>
        <input type="text" name="operator" id="operator"><br><br>
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" name="nim" id="nim"><br><br>
        <input type="submit" name="submit" value="Simpan">

        <table border="1">
        <?php
        if(isset($_POST['submit'])) {

            echo "<tr>";
            echo "<th>Nama Negara</th>";
            echo "<th>P</th>";
            echo "<th>M</th>";
            echo "<th>S</th>";
            echo "<th>K</th>";
            echo "<th>Point</th>";
            echo "<td>$negara</td>";
            echo "<td>$pertandingan</td>";
            echo "<td>$menang</td>";
            echo "<td>$seri</td>";
            echo "<td>$kalah</td>";
            echo "<td>$points</td>";
    
            echo "</tr>";
        }
         ?>
    </table>

    </form>

    <?php
    if(isset($_POST['submit'])) {
        // Set zona waktu ke Asia/Jakarta (WIB)
        date_default_timezone_set('Asia/Jakarta');
        
        $negara = $_POST['negara'];
        $pertandingan = $_POST['pertandingan'];
        $menang = $_POST['menang'];
        $seri = $_POST['seri'];
        $kalah = $_POST['kalah'];
        $operator = $_POST['operator'];
        $nim = $_POST['nim'];

        // Hitung jumlah poin
        $points = ($menang * 3) + ($seri * 1);

        // Format data
        $data = "A\n";
        $data .= "Data Group B Piala Asia Qatar U-23 Per " . date("d M Y H:i:s") . "\n";
        $data .= "Nama Operator/NIM: $operator/$nim\n\n";
=
        // Simpan data ke file
        file_put_contents('db.html', $data, FILE_APPEND | LOCK_EX);
        // Tampilkan output
        
        echo "<h3>Data telah disimpan:</h3>";
        // echo "<pre>$data</pre>";
    
    }
    ?>

</body>
</html>
