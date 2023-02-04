<?php
session_start();
$token = $_SESSION['token'];
if (isset($_POST['name'])) {
    $url = "https://scahya.000webhostapp.com/api/mahasiswa/update.php?token={$token}";
    $ch = curl_init();
    $arr['id'] = $_POST['id'];
    $arr['name'] = $_POST['name'];
    $arr['email'] = $_POST['email'];
    $arr['phone'] = $_POST['phone'];
    $arr['prodi'] = $_POST['prodi'];
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
        header('location:index.php');
        $_SESSION['success_mg'] = $result['data'];
        die();
    } else {
        echo $result['data'];
    }
} else {
    header('location:index.php');
}
