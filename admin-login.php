
<?php 
require_once('includes/header.php'); 
require_once('includes/function.php');
?>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="mt-5">
                    <img src="images/login.png" width="150" height="150" class="d-flex m-auto" alt="Logo Login">
                </div>
                <div class="card">
                    <div class="card-title bg-dark rounded-top">
                        <h3 class="text-center text-white py-3">Admin Login</h3>
                    </div>

                    <?php
                        loginfun()
                    ?>

                    <div class="card-body">

                    <form action="adminphp.php" method="POST">
                        <input type="text" placeholder="Gebruikersnaam" name="UName" class="form-control mb-2">
                        <input type="password" placeholder="Wachtwoord" name="Password" class="form-control mb-3">
                        <button class="btn btn-success" name="login">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php'); ?>