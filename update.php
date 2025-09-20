<?php
include 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $tgl = $_POST['tanggalLahir'];

    mysqli_query($conn, "UPDATE students SET nama='$nama', jekel='$jekel', tanggalLahir='$tgl' WHERE id=$id");
    header("Location: index.php");
}
?>

<h2>Edit Siswa</h2>
<form method="post">
    Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>
    Jenis Kelamin:
    <select name="jekel">
        <option value="Laki-laki" <?= $row['jekel']=="Laki-laki"?"selected":"" ?>>Laki-laki</option>
        <option value="Perempuan" <?= $row['jekel']=="Perempuan"?"selected":"" ?>>Perempuan</option>
    </select><br>
    Tanggal Lahir: <input type="date" name="tanggalLahir" value="<?= $row['tanggalLahir'] ?>"><br>
    <button type="submit" name="submit">Update</button>
</form>
