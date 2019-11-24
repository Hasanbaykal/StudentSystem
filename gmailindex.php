<?php
    session_start();

    if (!isset($_SESSION['access_token'])) {
        header("location:login.php");
        exit();
    }
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
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-3">
                <img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
            </div>

            <div class="col-md-9">
                <table class="table table-hover table=borderen">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?php echo $_SESSION['id'] ?></td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $_SESSION['givenName'] ?></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $_SESSION['familyName'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo $_SESSION['gender'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
    </html>