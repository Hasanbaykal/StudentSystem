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
                        <h3 class="text-center text-white py-3">Student Registratie</h3>
                    </div>

                    <?php
                        RegisterFun();
                    ?>
                    
                    <div class="card-body">

                    <form action="registerphp.php" method="POST" enctype="multipart/form-data">
                        <label class="btn btn-primary">
                            Upload Foto Studentenpas<input type="file" style="display:none" name="image">
                        </label>-->
                        <input type="text" placeholder="Voornaam" name="FName" class="form-control mb-2">
                        <input type="text" placeholder="Achternaam" name="LName" class="form-control mb-2">
                        <input type="text" placeholder="Gebruikersnaam" name="UName" class="form-control mb-2">
                        <input type="text" placeholder="Geboortedatum: DD/MM/JJJJ" name="DOB" class="form-control mb-2">
                        
                        <select title="Gender" name="Gender" class="form-control mb-2">
                            <option value="null">Selecteer geslacht:</option>
                            <option value="Man">Man</option>
                            <option value="Female">Vrouw</option>
                        </select>

                        <input type="email" placeholder="E-mail" name="Email" class="form-control mb-2">
                        <input type="password" placeholder="Wachtwoord" name="Password" class="form-control mb-3">
                        <button class="btn btn-success" name="register">Registreer</button>
                    </form>

                    </div>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php'); ?>