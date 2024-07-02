<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/bootstrap.css" />
  <title>E-Commerce</title>
</head>

<body class="bg-white">
  <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">


    <div class="login-page" style="width: 412px;">
      <h3 class="">Login Form</h3>
      <form class="d-flex flex-column   ">
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="username" class="form-control" placeholder="" name="username"/>
          <label class="form-label" for="username">Username</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="password" class="form-control" />
          <label class="form-label" for="password">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>

          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>

        <!-- Submit button -->
         <div class="submit-button d-flex flex-column align-items-end">
           <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary align-items-end btn-block mb-4 px-4">Sign in</button>
         </div>

        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="#!">Register</a></p>
        </div>
      </form>

    </div>


  </div>
</body>

</html>