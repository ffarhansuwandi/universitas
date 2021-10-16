<?php
include("connection.php");
if(isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql = "delete from Mahasiswa where id=$id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('Location:display.php');
    } else {
        die(mysqli_error($db));
    }
}
