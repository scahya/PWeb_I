<?php

include('db.php');
$status = $data =$code ='';
//echo "ok";

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (isset($_POST['name'])) {
        if (mysqli_query($conn, "insert into user (name, email, password) values ('$name', '$email', '$password')")) {
            $status = 'true';
            $data  = "Data tersimpan";
            $code  = '10';
        } else {
            $status = 'true';
            $data  = "Data gagal disimpan";
            $code  = '9';
        }
    }

echo  json_encode(['status' => $status, 'data' => $data, 'code' => $code, 'response' =>['name'=>$name, 'email'=>$email,'password'=>$password]]);
