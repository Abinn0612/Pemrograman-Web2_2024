<?php 
// Sisipkan Koneksi
require_once('koneksi.php');

// Buat Query Untuk Get All Data
$query = "SELECT * FROM pasien";

// eksekusi query dengan PDO
$pasiens = $dbh->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>List Data Pasien</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $no = 0;
        foreach($pasiens as $pasien):
        ?>
            <tr>
                <td><?php echo $no = $no + 1 ?></td>
                <td><?php echo $pasien['nama'] ?></td>
                <td><?php echo $pasien['email'] ?></td>
                <td><?php echo $pasien['tmp_lahir'] ?></td>
                <td><?php echo $pasien['tgl_lahir'] ?></td>
                <td><?php echo $pasien['gender'] ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
</body>
</html>