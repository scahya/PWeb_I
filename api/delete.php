<?php
include('token.php');
$sqlRes = mysqli_query($conn, "SELECT * FROM mahasiswa");
if (!isset($status)) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  if (isset($_POST['id']) && isset($_POST['id']) > 0) {
    if (mysqli_query($conn, "delete from mahasiswa where id='$id'")) {
      $status = 'true';
      $data  = "Data terhapus";
      $code  = '10';
    } else {
      $status = 'true';
      $data  = "Data gagal dihapus";
      $code  = '7';
    }
  } else {
    $status = 'true';
    $data  = "provide id";
    $code  = '6';
  }
}

echo  json_encode(['status' => $status, 'data' => $data, 'code' => $code]);
