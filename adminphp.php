<?php

require_once('includes/connection.php');   
if(isset($_POST['login']))
    {
        if(empty($_POST['email']) || empty($_POST['password']))
        {
            header("location:admin-login.php?empty");
        }
        else
        {
            $Email = mysqli_real_escape_string($con,$_POST['email']);
            $Pass = mysqli_real_escape_string($con,$_POST['password']);

            $query = " select * from admin where AdminName = '".$Email."' and AdminPass=MD5('".$Pass."')";
            $result = mysqli_query($con,$query);
            
            if(mysqli_fetch_assoc($result))
            {
                header("location:admin-panel.php");
            }
            else
            {
                header("location:admin-login.php?Admin_Invalid");
            }
        }
    }
    else
    {
        header("location:admin-login.php");
    }

?>