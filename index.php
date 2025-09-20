<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<h2>Data Siswa</h2>
<a href="create.php">+ Tambah Siswa</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['jekel'] ?></td>
        <td><?= $row['tanggalLahir'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
