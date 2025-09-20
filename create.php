<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $tgl = $_POST['tanggalLahir'];

    mysqli_query($conn, "INSERT INTO students (nama, jekel, tanggalLahir) 
    VALUES ('$nama', '$jekel', '$tgl')");
    header("Location: index.php");
}
?>

<h2>Tambah Siswa</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    Jenis Kelamin:
    <select name="jekel">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    Tanggal Lahir: <input type="date" name="tanggalLahir"><br>
    <button type="submit" name="submit">Save</button>
</form>
