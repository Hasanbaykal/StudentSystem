<?php
    session_start();
    require_once('includes/connection.php');
    if(isset($_POST['login']))
    {
        if(empty($_POST['UName']) || empty($_POST['Password']))
        {
            header("location:login.php?Empty");
            exit();
        }
        else
        {
            $User = mysqli_real_escape_string($con,$_POST['UName']);
            $Pass = mysqli_real_escape_string($con,$_POST['Password']);

            $query = " select * from student_data where UName = '".$User."'";
            $result = mysqli_query($con,$query);

            if($row = mysqli_fetch_assoc($result))
            {
                //De Hashing Password
                $Hash = password_verify($Pass,$row['Password']);

                if($Hash==false)
                {
                    header("location:login.php?Pinvalid");
                    exit();
                }
                elseif($Hash==true)
                {
                    $_SESSION['StudentID']=$row['ID'];
                    header("location:view.php");
                }
            }
            else
            {
                header("location:login.php?Invalid");
                exit();
            }
        }
    }
    else
    {
        header("location:login.php");
        exit();
    }

?>