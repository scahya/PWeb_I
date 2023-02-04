<?php
include('db.php');
$email = $password = "";
function generateRandomString($length = 11) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
//echo "ok";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sqlRes = mysqli_query($conn, "select * from user where email = '$email' and password = '$password'");
   
    if (isset($_POST['email'])) {
        if (mysqli_num_rows($sqlRes)>0) {
            $rundom = generateRandomString();
            $sqlRes2= mysqli_query($conn, "insert into api_tokens (token) values ('$rundom')");
            $status = 'true';
           $data = [];
            while ($row = mysqli_fetch_assoc($sqlRes)) {
                $data[] = $row;
            }
            $code  = '10';
        } else {
            $status = 'false';
            $data  = "Data gagal disimpan";
            $code  = '9';
        }
    }


echo  json_encode(['status' => $status, 'data' => $data, 'code' => $code, 'token'=>$rundom]);
