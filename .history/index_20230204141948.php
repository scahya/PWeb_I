<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PWeb</title>
  </head>

  <body class="d-flex flex-column min-vh-100"> 
    <section class="bg-image h-100">
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

          <div class="collapse navbar-collapse" id="  ">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="setAbout()">About </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-md h-75 justify-content-center align-items-center">
        <div
          class="row justify-content-end h-75 mt-4 rounded-4"
          style="background-color: black; opacity: 0.8"
        >
          <div
            class="col-6 p-md-5 h-150"
            style="align-content: center; justify-content: center"
          >
            <!-- stuff -->
            <div class="card-body p-5 text-white">
              <h1 class="fw-light" id="title">Stuff</h1>
              <p class="lead" id="text">Esplaination of the stuff</p>
            </div>
          </div>
          <div
            class="col-6 p-md-5 h-150"
            style="align-content: center; justify-content: center"
          >
            <!-- Login Form -->
            <div class="p-2 rounded-4" style="background-color: whitesmoke">
              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                Sign in
              </p>
              <form
                action="reqLogin.php"
                
                method ="post"
                class="mx-1 mx-md-4 align-items-center justify-content-center"
              >
                <!-- input Email -->
                <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="Lemail">Email</label>
                    <input
                      type="text"
                      id="Lemail"
                      name="Lemail"
                      class="form-control"
                      placeholder="email"
                    />
                  </div>
                </div>
                <!-- input Password -->
                <div class="d-flex flex-row align-items-center mb-2">
                  <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="Lpass">Password</label>
                    <input
                      type="password"
                      name="Lpass"
                      id="Lpass"
                      class="form-control"
                      placeholder="password"
                    />
                  </div>
                </div>
                <!-- Rememberme & Forgot Password -->
                <div class="d-flex flex-row justify-content-between mb-4">
                  <!-- CheckBox -->
                  <div class="col-7 align-items-center">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      Remember Me
                    </label>
                  </div>

                  <div class="col-sm-4" style="align-items: flex-end">
                    <a
                      href="#"
                      class="link-danger"
                      style="text-decoration: none"
                    >
                      Forgot Password
                    </a>
                  </div>
                </div>
                <!-- Submit Button -->
                <div class="d-flex justify-content-center mb-3 mb-lg-4">
                  <input
                    type="submit"
                    value="Login"
                    class="btn btn-primary btn-lg"
                    style="width: 100%"
                  />
                </div>
                <!-- Regis Button -->
                <div class="d-flex justify-content-center mb-3 mb-lg-4">
                  <button
                    type="button"
                    class="btn btn-secondary btn-lg"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal"
                    style="width: 100%"
                  >
                    Register
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer 
      style="margin-top: 100px; height: fit-content"
      class="card-footer align-items-center mt-auto"
    >
      <div class="d-flex rounded-top bg-dark justify-content-center">
        <p class="text-light text-center">
          © Copyright by 20552011201_BagoesCahyaArdhana_TIF20K_UASWEB1
        </p>
      </div>
    </footer>
    <!-- <div class="card-footer bg-transparent border-success">Footer</div> -->
    <!-- Modal Register -->
    <div
      class="modal fade"
      id="Modal"
      tabindex="-1"
      aria-labelledby="ModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="reqRegis.php" method="POST" id="myform" >
            <div class="mb-3">
                <label for="Rname" class="col-form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Rname"
                  name="Rname"
                />
              </div>
              <div class="mb-3">
                <label for="Remail" class="col-form-label">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="Remail"
                  name="Remail"
                />
              </div>
              <div class="mb-3">
                <label for="Rpass" class="col-form-label">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="Rpass"
                  name="Rpass"
                />
              </div>
              <div class="mb-3">
                <label for="RRpass" class="col-form-label"
                  >Ulangi Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="RRpass"
                  name="RRpass"
                />
              </div>
              <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
              >
              Close
            </button>
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </form>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    <script>
      let judul = "";
      let text = "";
      function reqLog() {
        const password = document.getElementById("Lpass").value;
        const email = document.getElementById("Lemail").value;
        let submitOK = true;
        const Rpass = document.getElementById("Rpass").value;
        const Remail = document.getElementById("Remail").value;
        if (email.indexOf("@") == -1) {
          alert("Not a valid e-mail!");
          submitOK = false;
        } else {
          if (email === Remail || email === "admin@mail.com") {
            if (password === Rpass || password === "admin") {
              submitOK = true;
            } else {
              alert("Password or email are not valid");
              submitOK = false;
            }
          } else {
            alert("Password or email are not valid");
            submitOK = false;
          }
        }

        return submitOK;
      }
      function reqRegis() {
        const Remail = document.getElementById("Remail").value.indexOf("@");
        const Rpass = document.getElementById("Rpass").value;
        const RRpass = document.getElementById("RRpass").value;
      
      }
      function setAbout() {
        judul = "About";
        text = "About ssdlalsdaks oikoasd osda";
        document.getElementById("title").innerHTML = judul;
        document.getElementById("text").innerHTML = text;
      }
    </script>
  </body>

  <style>
    body {
      background: url("https://source.unsplash.com/twukN12EN7c/1920x1080")
        no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
      -o-background-size: cover;
      height: 100%;
      width: auto;
    }
  </style>
</html>
