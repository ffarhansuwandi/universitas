<?php
include("connection.php");
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "update Mahasiswa set id=$id,nama='$nama',nim='$nim',email='$email',password='$password'
    where id=$id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('Location:display.php');
    } else {
        die(mysqli_error($db));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/styles.css">

    <title>Universitas Indonesia</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" autocomplete="off" name="nama">
            </div>
            <div class="mb-3">
                <label>Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" autocomplete="off" name="nim">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" autocomplete="off" name="email">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" autocomplete="off" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>