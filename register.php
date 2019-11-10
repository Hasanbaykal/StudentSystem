<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/header.php'); ?>

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

                        $Message = "";
                        if(isset($_GET['Empty'])) 
                        {
                            $Message = " Vul alstublieft de lege velden in. ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }

                        if(isset($_GET['Characters']))
                        {
                            $Message = " Gebruik alstublieft geldige karakters. ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }

                        if(isset($_GET['ValidEmail']))
                        {
                            $Message = " Vul alstublieft een geldige E-mail adres in. ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }

                        if(isset($_GET['UserTaken']))
                        {
                            $Message = " Gebruikersnaam bestaat al. ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }

                        if(isset($_GET['EmailTaken']))
                        {
                            $Message = " E-mail adres bestaat al. ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }

                        if(isset($_GET['Succes']))
                        {
                            $Message = " Uw account is geregistreerd. ";
                            echo '<div class="alert alert-succes text-center">'.$Message. '
                                <a href="login.php">Inloggen</a>
                                </div>';

                        }

                    ?>
                    
                    <div class="card-body">

                    <form action="registerphp.php" method="POST" enctype="multipart/form-data">
                        <!--<label class="btn btn-primary">
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