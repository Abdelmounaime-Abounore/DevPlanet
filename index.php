<?php 
session_start();
if (isset($_SESSION["id"])) {
  unset($_SESSION['id']); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style.css">
</head>

<body>
  <!-- Section: Design Block -->
<section class="bg_login">
  <div class="container px-5 text-center text-lg-start h-100">
    <div class="row align-items-center mt-5 my-5">
      <div class="col-lg-6 mt-5">
        <h1 class="my-5 fw-bold">
        Wemcome to DEV Planet<br />
        </h1>
      </div>
      <div class="col-lg-6  mt-5 position-relative">
        <div class="card">
          <?php if(isset($_GET['msg'])){ ?>
          <h3 style="color: red;margin-top: 10px;margin-left: 10px;">Informatios inccorect</h3>
          <?php } ?>
          <div class="card-body px-4 py-5 px-md-5 h-100">   
            <form  method="post" action="classes/traitement.php" name="form">
              <!-- User name input -->
              <div class="mb-4">
                <label>E-mail</label>
                <input type="email" id="email" class="form-control" name="email"/>
                <div id="emailError" class="text-danger" style='display: none;'>*The fields cannot be blank</div>   
              </div>
               
              <!-- Password input -->
              <div class="mb-4">
                <label>Password</label>
                <input type="password" id="password" class="form-control" name="password"/>
                <div id="passwordError" class="text-danger" style='display: none;'>*The fields cannot be blank</div>         
              </div>

              <!-- Submit button -->
              <input type="hidden" name="action" value="login">
              <button type="submit" class="btn btn-info text-light btn-block p-2" onclick="fullLoginInput(event)">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<script src="./js/forms.js"></script>
</body>
</html>