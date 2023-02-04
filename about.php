<?php
session_start();
$token = $_SESSION['token'];
$userDatat = $_SESSION['user'];
$userData = $userDatat[0];
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

<body style="width:100%" class="d-flex flex-column min-vh-100">
  <?php $active='about'; include ("components/header.php" )?>
    <div class="container" >
        <div class="bg-body rounded">
            <div class="container py-5">
                <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1 class="display-4">About us page</h1>
                    <p class="lead text-muted mb-0">stuwff</p>
                    <p class="lead text-muted mb-0">stuff</p>
                    <p class="lead text-muted">stuff</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="assets/image/dog.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width:100%" class="mt-auto">
      <?php include 'components/footer.php' ?>
    </div>

</body>

</html>