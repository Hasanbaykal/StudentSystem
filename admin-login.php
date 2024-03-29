
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
                        $Message = "";
                        if(isset($_GET['empty']))
                        {
                            $Message = " Vul De Lege Velden In ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div> ';
                        }

                        if(isset($_GET['Admin_Invalid']))
                        {
                            $Message = " Vul Alstufblieft De Juiste Gegevens In ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div> ';
                        }

                        if(isset($_SESSION['admin']))
                        {
                            header("location:admin-panel.php");
                        }
                    ?>

                    <div class="card-body">

                    <form action="adminphp.php" method="POST">
                        <input type="text" placeholder="Email" name="email" class="form-control mb-2">
                        <input type="password" placeholder="Wachtwoord" name="password" class="form-control mb-3">
                        <button class="btn btn-success" name="login">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php'); ?>