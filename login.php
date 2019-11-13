
<?php require_once('includes/header.php'); ?>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="mt-5">
                    <img src="images/login.png" width="150" height="150" class="d-flex m-auto" alt="Logo Login">
                </div>
                <div class="card">
                    <div class="card-title bg-dark rounded-top">
                        <h3 class="text-center text-white py-3">Student Login</h3>
                    </div>

                    <?php

                        $Message = "";
                        if(isset($_GET['Empty']))
                        {
                            $Message = " Vul De Lege Velden In ";
                            echo ' <div class="alert alert-danger text-center">'.$Message.'</div> ';
                        }

                        $Message = "";
                        if(isset($_GET['Invalid']))
                        {
                            $Message = " Gebruikersnaam Bestaat Niet ";
                            echo ' <div class="alert alert-danger text-center">'.$Message.'</div> ';
                        }

                        $Message = "";
                        if(isset($_GET['Pinvalid']))
                        {
                            $Message = " Wachtwoord Klopt Niet ";
                            echo ' <div class="alert alert-danger text-center">'.$Message.'</div> ';
                        }

                    ?>

                    <div class="card-body">

                    <form action="loginphp.php" method="POST">
                        <input type="text" placeholder="Gebruikersnaam" name="UName" class="form-control mb-2">
                        <input type="password" placeholder="Wachtwoord" name="Password" class="form-control mb-3">
                        <button class="btn btn-success" name="login">Login</button>
                        <a href="register.php" class="card-link float-right" >Registreer</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php'); ?>

