<?php
    require_once('includes/header.php');
    require_once('includes/connection.php');

    if(isset($_GET['edit']) || isset($_SESSION['admin']))
    {
        $GetID = $_GET['edit'];
        $query = " select * from student_data where ID = '".$GetID."'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $ID = $row['ID'];
            $image = $row['image'];
            $FName = $row['FName'];
            $LName = $row['LName'];
            $UName = $row['UName'];
            $DOB = $row['DOB'];
            $Gender = $row['Gender'];
            $Email = $row['Email'];
            $Pass = $row['Password'];

        }
    }
?>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="mt-5">
                    <img src="images/login.png" width="150" height="150" class="d-flex m-auto" alt="Logo Login">
                </div>
                <div class="card">
                    <div class="card-title bg-dark rounded-top">
                        <h3 class="text-center text-white py-3">Update Student</h3>
                    </div>
                    
                    <div class="card-body">

                    <form action="update.php?S_ID=<?php echo $ID ?>" method="POST" enctype="multipart/form-data">
                        <label class="btn btn-primary">
                            Upload Foto Studentenpas<input type="file" style="display:none" name="image">
                        </label>-->
                        <img src="images/<?php echo $image ?>" width="50" height="50" class="rounded-circle mb-2">
                        <input type="text" placeholder="Voornaam" name="FName" class="form-control mb-2" value="<?php echo $FName ?>">
                        <input type="text" placeholder="Achternaam" name="LName" class="form-control mb-2" value="<?php echo $LName ?>">
                        <input type="text" placeholder="Gebruikersnaam" name="UName" class="form-control mb-2" value="<?php echo $UName ?>">
                        <input type="text" placeholder="Geboortedatum: DD/MM/JJJJ" name="DOB" class="form-control mb-2" value="<?php echo $DOB ?>">
                        
                        <select title="Gender" name="Gender" class="form-control mb-2">

                            <?php
                                if($Gender=="Man")
                                {
                                    echo '<option value="Man">Man</option>
                                          <option value="Female">Vrouw</option>';
                                }
                                else
                                {
                                    echo '<option value="Female">Vrouw</option>
                                          <option value="Man">Man</option>';
                                }

                            ?>
                            
                        </select>

                        <input type="email" placeholder="E-mail" name="Email" class="form-control mb-2" value="<?php echo $Email ?>">
                        <input type="password" placeholder="Wachtwoord" name="Password" class="form-control mb-3" value="<?php echo $Pass ?>">
                        <button class="btn btn-success" name="update">Update Nu</button>
                    </form>

                    </div>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php'); ?>