<?php

session_start();
if (isset($_POST['Lemail'])) {
    $url = "https://scahya.000webhostapp.com/api/mahasiswa/auth.php";
    $ch = curl_init();

    $arr['email'] = $_POST['Lemail'];
    $arr['password'] = $_POST['Lpass'];
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);

    // echo "<pre>";

    // print_r($result);
    // die();
    // echo '<script>console.log({$result}); </script>';

    if (isset($result['status'])&& isset($result['code'])  && $result['code'] == 10) {
        $_SESSION['token'] = $result['token'];
        $_SESSION['user'] = $result['data'];
        header('location:home.php');
        die();
    } 
    else {
        echo $result;
        header('location:index.php');
    }
} else {
    header('location:index.php');
}
