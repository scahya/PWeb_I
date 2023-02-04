<?php 
$active;
?>
<html>
<header>
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-2"
          style="opacity: 0.9"
        >
          <a class="navbar-brand" href="#">Bagoes</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
            <?php if($active== 'home'){
                echo '<li class="nav-item active">';
              }else{
                echo '<li class="nav-item">';
              }
               ?>
                <a class="nav-link" href="../home.php">Home </a>
              </li>
              <!-- <li class="nav-item">
                 -->
              <?php if($active== 'about'){
                echo '<li class="nav-item active">';
              }else{
                echo ' <li class="nav-item">';
              }
               ?>
                <a class="nav-link" href="../about.php">About</a>
              </li>
            </ul>
          </div>

          <button type="button" class="btn btn-outline-dark">
            <i class="down mx-1"></i>
            <a style="color: white" href="../editUser.php" >Welcome, <?php echo $userData['name']?></a>
            <img
              class="rounded-circle dropdown-toggle"
              src="../assets/image/user.jpg"
              alt="alt"
              width="25"
              height="25"
            />
          </button>
        </nav>
      </header>
      </html>