<?php
    include '../config/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
    <div class="vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="login-page border border-3 rounded p-5" style="width: 400px">
            <h3 class="text-center ">Login</h3>

            <!-- Input Username -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" class="form-control">
            </div>

            <!-- Input Password -->
            <div data-mdb-input-init class="form-outline mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control">
            </div>

            <!-- Login-Button -->
            <div class="submit-button d-flex flex-column align-items-end pt-2">
                <button type="button" class="btn btn-primary">Login</button>
            </div>

            <!-- Link Regist -->
            <div class="link pt-3">
                <p>Don't have account ? <a href="./pages/index.php">Sign in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
