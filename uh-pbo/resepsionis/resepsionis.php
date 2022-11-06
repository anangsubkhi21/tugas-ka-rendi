<?php 
require '../function.php';

$resepsionis = query("SELECT * FROM resepsionis");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheeet" href="style.css">

    <style>
        .container{
    margin-top: 80px;
    margin-left: 320px;
}

table {
    width: 80%;
    border: none;
    border-radius: 5px;
    padding: 20px;
    background-color: grey;
    border: 2px solid black;
    margin-top: 20px;
}

th,td{
    text-align: left;
    padding: 10px;
    font-size: 21px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
}

th{
    color: rgb(16, 16, 26);
}

td{
    color: whitesmoke;

}
    </style>

</head>
<body>
<div class="row">
        <div class="col-3">
            <?php require '../navbar/navbar.php'; ?>
        </div>
        <div class="col-9">
    <div class="container mt-5">
    <h3>Data User</h3>
    
    <a href="tambah_resepsionis.php" class="tambah">Tambah Resepsionis</a>
    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama lengkap</th>
            <th>Kelas</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($resepsionis as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["username"]; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td><?= $data["roles"]; ?></td>
            <td>
                <a href="edit_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>"class="edit">edit</a>
                <a href="hapus_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    </div>
</div>
</body>
</html>