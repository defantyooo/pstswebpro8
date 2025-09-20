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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-warning">
      <h3>Edit Siswa</h3>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label>
          <select name="jekel" class="form-select" required>
            <option value="Laki-laki" <?= $row['jekel']=="Laki-laki"?"selected":"" ?>>Laki-laki</option>
            <option value="Perempuan" <?= $row['jekel']=="Perempuan"?"selected":"" ?>>Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Lahir</label>
          <input type="date" name="tanggalLahir" class="form-control" value="<?= $row['tanggalLahir'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Return</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>
