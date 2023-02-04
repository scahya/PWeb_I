<?php



session_start();
if (isset($_POST['Rname'])) {
    $url = "https://scahya.000webhostapp.com/api/mahasiswa/reg.php";
    $ch = curl_init();
    $arr['name'] = $_POST['Rname'];
    $arr['email'] = $_POST['Remail'];
    $arr['password'] = $_POST['Rpass'];
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

        header('location:index.php');
        die();
    } 
    else {
        echo $result['data'];
    }
} else {
    header('location:index.php');
}
