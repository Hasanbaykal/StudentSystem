<?php
    require_once('includes/connection.php');
    if(isset($_POST['update']))
    {
        $Image = $_FILES['image']['name'];
        $Type = $_FILES['image']['type'];
        $Temp = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        
        $Ext = explode('.',$Image);
        $TrueExt = (strtolower(end($Ext)));
        $AllowImg = array('jpg','jpeg','png');
        $Target = "images/".$Image;

        $FirstName = mysqli_real_escape_string($con,$_POST["FName"]);
        $LastName = mysqli_real_escape_string($con,$_POST["LName"]);
        $UserName = mysqli_real_escape_string($con,$_POST["UName"]);
        $DOB = mysqli_real_escape_string($con,$_POST["DOB"]);
        $Gender = mysqli_real_escape_string($con,$_POST["Gender"]);
        $Email = mysqli_real_escape_string($con,$_POST["Email"]);
        $Pass = mysqli_real_escape_string($con,$_POST["Password"]);

        $GetID = $_GET['S_ID'];
        $queryimg = " select * from student_data where ID='".$GetID."'";
        $resultimg = mysqli_query($con,$queryimg);

        if(empty($Image) || empty($FirstName) || empty($LastName) || empty($UserName) || empty($DOB) || empty($Gender) || empty($Email) || empty($Pass))
        {
            echo ' Vul De Lege Velden In ';
        }
        else
        {
            if(!preg_match("/^[a-z,A-Z]*$/",$FirstName) || !preg_match("/^[a-z,A-Z]*$/",$LastName) || !preg_match("/^[a-z,A-Z]*$/",$UserName))
            {
                echo ' Vul De Juiste Karakters In ';
            }
            else
            {
                if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
                {
                    echo ' Vul De Juiste E-Mail Adres In ';
                }
                else
                {
                    $HashPass = password_hash($Pass, PASSWORD_DEFAULT);

                    while($row=mysqli_fetch_assoc($resultimg))
                    {
                        $Oldimg = $row['image'];
                    }

                    if(in_array($TrueExt,$AllowImg))
                            {

                                if($size<1000000)
                                {
                                    unlink("images/$Oldimage");
                                    $query = " update student_data set image='".$Image."', FName='".$FirstName."', LName='".$LastName."', UName='".$UserName."', DOB='".$DOB."', Gender='".$Gender."', Email='".$Email."', Password='".$HashPass."' where ID='".$GetID."' ";
                                    mysqli_query($con,$query);
                                    move_uploaded_file($Temp,$Target);
                                    header("location:admin-panel.php");
                                    exit();

                                }
                                else
                                {
                                    echo ' Afbeelding Is Te Groot ';
                                }

                            }
                }
            }
        }

    }
    else
    {
        header("location:admin-panel.php");
    }

?>