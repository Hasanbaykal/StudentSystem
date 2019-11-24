<?php 
require_once('config.php');

if (isset($_SESSION['access_token'])) {
    header("location: gmailindex.php");
    exit();
}

$loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <title>Student Registratie Systeem</title>
    </head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="mt-5">
                    <img src="images/login.png" width="150" height="150" class="d-flex m-auto" alt="Logo Login">
                </div>
                <div class="card">
                    <div class="card-title bg-dark rounded-top">
                        <h3 class="text-center text-white py-3">Student G-Mail Login</h3>
                    </div>

                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In met Google" class="btn btn-danger">

                </div>
            </div>
        </div>
    </div>
    </body>
    </html>