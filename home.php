<?php
session_start();
$token = $_SESSION['token'];
$userDatat = $_SESSION['user'];
$userData = $userDatat[0];
$url = "https://scahya.000webhostapp.com/api/mahasiswa/index.php?token={$token}";
//$url = "https://www.google.co.in/";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);

// echo '<pre>';
// print_r($result);
// echo '</pre>';


// die();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body style="width:100% " class="d-flex flex-column min-vh-100">
  <?php $active ='home'; include ("components/header.php") ?>
  <div class="container" >
    <div class="table-responsive" >
      <div class="table-wrapper" style=" width: 85%">
        <div class="table-title">
          <div class="row"><div class="col-md-12">
            <?php if(isset($_SESSION['success_mg'])){
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">';
              echo  $_SESSION['success_mg'];
              echo '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button> ';
              echo ' </div>';
          } ?>
          </div>
   
            <div class="col-sm-8">
              <h2>Detail Mahasiswa</h2>
            </div>
            <div class="col-sm-4">
              <a href="add.php" class="btn btn-primary add-new"><i class="fa fa-plus"></i> Tambah</a>
            </div>
          </div>
        </div>
        <?php
        if (isset($result['status']) && isset($result['code']) && isset($result['code']) == 5) {
        ?>

          <form action="" method="POST" id="myform">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Prodi</th>
                  <th style="width:20%">Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($result['data'] as $list) {

                ?>
                  <tr>
                    <td><?php echo $list['name'] ?></td>
                    <td><?php echo $list['email'] ?></td>
                    <td><?php echo $list['phone'] ?></td>
                    <td><?php echo $list['prodi'] ?></td>
                    <td >
                      <div style="display:flex" >

                        <a style="display:flex" href="edit.php?id=<?php echo $list['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Edit</a>
                        <a  style="display:flex" href="delete.php?id=<?php echo $list['id'] ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i>Delete</a>
                      </div>
                    </td>
                  </tr>

                <?php

                } ?>


              </tbody>
            </table>
          </form>

        <?php

        } else {
          //echo $result['data'];
        }

        ?>

      </div>
    </div>
  </div>
  <div style="width:100% "class="mt-auto">
      <?php include 'components/footer.php' ?>
      </div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
   
    .down {
      transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      border: solid white;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
    }
  </style>
</html>