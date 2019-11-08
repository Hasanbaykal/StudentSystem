<?php
    if(isset($_POST['register']))
    {
        
        $FirstName = mysqli_real_escape_string($db,$_POST["FName"]);
        $LastName = mysqli_real_escape_string($db,$_POST["LName"]);
        $UserName = mysqli_real_escape_string($db,$_POST["UName"]);
        $DOB = mysqli_real_escape_string($db,$_POST["DOB"]);
        $Gender = mysqli_real_escape_string($db,$_POST["Gender"]);
        $Email = mysqli_real_escape_string($db,$_POST["Email"]);
        $Pass = mysqli_real_escape_string($db,$_POST["Password"]);

        if(empty($FirstName) || empty($LastName) || empty($UserName) || empty($DOB) || empty($Gender) || empty($Email) || empty($Pass))
        {
            header("location:register.php?Empty");
            exit();
        }
        else 
        {
            if(!preg_match("/^[a-z,A-Z]*$/",$FirstName) || !preg_match("/^[a-z,A-Z]*$/",$LastName) || !preg_match("/^[a-z,A-Z]*$/",$UserName))
            {
                header("location:register.php?Characters");
                exit();
            }
            else 
            {
                if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
                {
                    header("location:register.php?ValidEmail");
                    exit();
                }
                else 
                {
                    $query = " select * from student_data where UName='".$UserName."'";
                    $result = mysqli_query($db,$query);

                    if(mysqli_fetch_assoc($result))
                    {
                        header("location:register.php?UserTaken");
                        exit();
                    }
                    else 
                    {
                        $query = " select * from student_data where Email='".$Email."'";
                        $result = mysqli_query($db,$query);

                        if(mysqli_fetch_assoc($result))
                        {
                            header("location:register.php?EmailTaken");
                            exit();
                        }
                        else {
                            $HashPass = password_hash($Pass, PASSWORD_DEFAULT);
                            date_default_timezone_set('Europe/Amsterdam');
                            $Date = date("d/m/Y");
                            header("location:register.php?Succes");
                            exit();
                            }
                        }

                    }
                }

            }
    }
    else {
        header("location:register.php");
    }
