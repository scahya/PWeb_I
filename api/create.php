<?php
include('token.php');

$name = $email = $phone = $prodi = "";
//echo "ok";
if (!isset($status)) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    if (isset($_POST['name'])) {
        if (mysqli_query($conn, "insert into mahasiswa (name, email, phone, prodi) values ('$name', '$email', '$phone', '$prodi')")) {
            $status = 'true';
            $data  = "Data tersimpan";
            $code  = '10';
        } else {
            $status = 'true';
            $data  = "Data gagal disimpan";
            $code  = '9';
        }
    }
}
echo  json_encode(['status' => $status, 'data' => $data, 'code' => $code, 'response' =>['name'=>$name, 'email'=>$email,'phone'=>$phone,'prodi'=>$prodi]]);
