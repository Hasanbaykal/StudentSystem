<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <title>Student Registratie Systeem</title>
    </head>
    <body style="background:#CCC">

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.php" class="navbar-brand"><h3>Student Registratie Systeem</h3></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php

                            if(isset($_SESSION['StudentID']))
                            {
                                echo ' <form action="logout.php" method="POST">
                                            <button class="btn btn-link" name="logout">Logout</button>
                                        </form>';
                            }
                            else
                            {
                                echo ' <a href="login.php" class="nav-link">Inloggen</a> ';
                            }

                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>