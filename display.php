<?php
include("connection.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Awesome Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="/styles.css">

    <title>Universitas Indonesia</title>
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-success"><a class="text-light text-decoration-none" href="user.php"><span><i class="fas fa-plus me-2"></i></span>Add Users</a></button>
        <table class="table my-5">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Induk Mahasiswa</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from Mahasiswa";
                $result = mysqli_query($db, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $nim = $row['nim'];
                        $email = $row['email'];
                        $password = $row['password'];

                        echo '<tr class="align-middle">
                    <th scope="row">' . $id . '</th>
                    <td class="align-items-center">' . $nim . '</td>
                    <td>' . $nama . '</td>
                    <td>' . $email . '</td>
                    <td>' . $password . '</td>
                    <td>
                    <button class="btn btn-primary"><a class="text-light text-decoration-none" href="update.php?updateid=' . $id . '"><span><i class="fas fa-pen me-2"></i></span>Update</a></button>
                    <button class="btn btn-danger"><a class="text-light text-decoration-none" href="delete.php?deleteid=' . $id . '"><span><i class="fas fa-trash me-2"></i></span>Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>