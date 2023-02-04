<?php
session_start();
$userDatat = $_SESSION['user'];
$userData = $userDatat[0];
// var_dump($userData['name']);
?>
<!DOCTYPE html>
<html lang="en">

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

<body class="d-flex flex-column min-vh-100">
    <div class="container-lg" >
        <div class="table-responsive">
            <div class="table-wrapper" >
                <div class="table-title" >
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Update User</h2>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($userData['id_user']) ) {

                ?>

                    <form action="updateUser.php" method="POST" id="myform">

                        <table class="table table-bordered">

                           
                                <div class="form-group">
                                    <input type="hidden" name="id_user" value="<?php echo $userData['id_user'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" value="<?php echo $userData['name'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input readonly type="text" name="email" value="<?php echo $userData['email'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" value="<?php echo $userData['password'] ?>" class="form-control">
                                </div>
                            

                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

                            

                    </form>

                <?php

                } else {
                    //echo $result['data'];
                }

                ?>
            </div>
        </div>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</html>