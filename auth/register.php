<?php
include '../config/init.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/bootstrap.css" />
  <title>E-Commerce</title>
</head>

<body>
  <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">

    <div class="login-page border border-2 rounded py-4 px-5" style="width: 412px;">
      <h3 class="text-center p-3">Register Form</h3>
      <form class="d-flex flex-column   ">
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="username" class="form-control" placeholder="" name="username" />
          <label class="form-label" for="username">Username</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-2">
          <input type="password" id="password" class="form-control" />
          <label class="form-label" for="password">Password</label>
        </div>

        
        <!-- Submit button -->
        <div class="submit-button d-flex flex-column align-items-end">
          <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary align-items-end btn-block mb-4 px-4">Sign in</button>
        </div>
        
        <!-- Register buttons -->
        <div class="text-left mb-2">
          <p>Have a member? <a href="../index.php">Login</a></p>
        </div>
      </form>
    </div>


  </div>
</body>

</html>