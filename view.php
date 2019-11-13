<?php
    require_once('includes/header.php');
    require_once('includes/connection.php');

    if(isset($_SESSION['StudentID']))
    {
        $GetID = $_GET['success'];
        $query = " select * from student_data where ID='".$GetID."'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $StudentID = $row['ID'];
            $Image = $row['image'];
            $FirstName = $row['FName'];
            $LastName = $row['LName'];
            $UserName = $row['UName'];
            $DOB = $row['DOB'];
            $Gender = $row['Gender'];
            $Email = $row['Email'];
            $Date = $row['Date'];
        }
    }

    require_once('includes/footer.php');
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white mt-3">
                <h3 class="text-center py-3"> Student Details </h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card mt-3">
                <div class="card-title bg-primary text-white py-2 rounded-top">
                    <h4 class="text-center"><?php echo $FirstName." ".$LastName ?></h4>
                </div>
                <div class="card-body">
                    <img src="images/<?php echo $Image ?>" width="200" height="200" class="rounded-circle">
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="card mt-3">
                <table class="table tables-striped">
                    <tr>
                        <td>Student ID</td>
                        <td><?php echo $StudentID ?></td>
                    </tr>

                    <tr>
                        <td>Voornaam</td>
                        <td><?php echo $FirstName ?></td>
                    </tr>

                    <tr>
                        <td>Achternaam</td>
                        <td><?php echo $LastName ?></td>
                    </tr>

                    <tr>
                        <td>Gebruikersnaam</td>
                        <td><?php echo $UserName ?></td>
                    </tr>

                    <tr>
                        <td>Geboortedatum</td>
                        <td><?php echo $DOB ?></td>
                    </tr>

                    <tr>
                        <td>Geslacht</td>
                        <td><?php echo $Gender ?></td>
                    </tr>

                    <tr>
                        <td>E-mail Adres</td>
                        <td><?php echo $Email ?></td>
                    </tr>

                    <tr>
                        <td>Registratie Datum</td>
                        <td><?php echo $Date ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>