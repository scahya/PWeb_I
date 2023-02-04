<?php
session_start();
$token = $_SESSION['token'];
if (isset($_POST['name'])) {
    $url = "https://scahya.000webhostapp.com/api/mahasiswa/updateUser.php?token={$token}";
    $ch = curl_init();
    $arr['id'] = $_POST['id_user'];
    $arr['name'] = $_POST['name'];
    $arr['email'] = $_POST['email'];
    $arr['password'] = $_POST['password'];
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);

    // echo "<pre>";

    // print_r($result);
    // die();

    if (isset($result['status']) && isset($result['code'])  && $result['code'] == 10) {
        $_SESSION['user'] = $result['data'];
        // var_dump($result['data']);
        $_SESSION['success_mg'] = 'Sukses Ubah Profile';
        header('location:home.php');
        die();
    } else {
        // echo $result['data'];
        header('location:editUser.php');
    }
} else {
    header('location:home.php');
}
