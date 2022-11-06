<?php 
require '../function.php';

    
    if(isset($_POST["submit"])){
        if(tambahResepsionis($_POST) > 0){
        echo "
            <script type='text/javascript'>
                alert('Data user berhasil ditambahkan');
                window.location = 'resepsionis.php';
            </script>
        ";
        }
    
    else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'resepsionis.php';
        </script>
    ";
    }
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="main">
        <div class="box">
            
        <h3>Tambah data Resepsionis</h3>

        <form action="" method="POST">
            <label for="username">Username</label> <br />
            <input type="text" name="username" id="username" class="form-control"> <br />

            <label for="nama_lengkap">Nama Lengkap</label> <br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />

            <label for="kelas">Kelas</label> <br />
            <input type="kelas" name="kelas" id="kelas" class="form-control"> <br />

            <label for="password">Password</label> <br />
            <input type="password" name="password" id="Password" class="form-control"><br />

            <label for="roles">Roles</label> <br />
            <select name="roles" class="form-control"> <br/>
                
                <option value="Admin">Admin</option>
                <option value="resepsionis">resepsionis</option>
            </select>
            <button type="submit" name="submit">Kirim</button>

        </form>
        </div>
    </div>
</body>
</html>

    