<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into Mahasiswa (nama,nim,email,password)
    values('$nama','$nim','$email','$password')";
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
    <div class="container">
        <div class="row">
            <div class="col-5 h-100">
                <form class="my-auto" method="POST">
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
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-7">
                <img style="object-fit: cover;" src="https://images.unsplash.com/photo-1579441401150-731d2a86d961?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80">
            </div>
        </div>
    </div>
</body>

</html>