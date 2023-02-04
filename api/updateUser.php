<?php
include('token.php');

$name = $email = $password = "";
//echo "ok";
if (!isset($status)) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (isset($_POST['id']) && isset($_POST['id']) > 0) {
        if (mysqli_query($conn, "update  user set name = '$name', email = '$email', password = '$password' where id_user = '$id'")) {
            $sqlRes2 = mysqli_query($conn, "select * from user where id_user = '$id' ");
            if (mysqli_num_rows($sqlRes2)>0) {
                $data = [];
                while ($row = mysqli_fetch_assoc($sqlRes2)) {
                $data[] = $row;
                }
            }else{
                $data  = "Data updated";
            }
            $status = 'true';
           
            $code  = '10';
        } else {
            $status = 'true';
            $data  = "Data not inserted";
            $code  = '9';
        }
    }
}

echo  json_encode(['status' => $status, 'data' => $data, 'code' => $code]);
