<?php
include('token.php');

$name = $email = $phone = $prodi = "";
//echo "ok";
if (!isset($status)) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    if (isset($_POST['id']) && isset($_POST['id']) > 0) {
        if (mysqli_query($conn, "update  mahasiswa set name = '$name', email = '$email', phone = '$phone', prodi = '$prodi' where id = '$id'")) {
            $status = 'true';
            $data  = "Data diperbaharui";
            $code  = '10';
        } else {
            $status = 'true';
            $data  = "Data gagal diperbaharui";
            $code  = '9';
        }
    }
}

echo  json_encode(['status' => $status, 'data' => $data, 'code' => $code]);
