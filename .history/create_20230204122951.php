<?php



session_start();
if (isset($_POST['name'])) {
    $token = $_SESSION['token'];
    $url = "https://scahya.000webhostapp.com/api/mahasiswa/create.php?token={$token}";
    $ch = curl_init();
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
    // echo '<script>console.log({$result}); </script>';

    if (isset($result['status'])) {
        $_SESSION['success_mg'] = $result['data'];

        header('location:home.php');
        die();
    } 
    else {
        echo $result['data'];
    }
} else {
    header('location:home.php');
}
