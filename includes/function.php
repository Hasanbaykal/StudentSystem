<?php

    //Register Function
    function RegisterFun()
    {
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

                        if(isset($_GET['Invalid_Format']))
                        {
                            $Message = " Invalid Format ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }

                        if(isset($_GET['Too_Large']))
                        {
                            $Message = " Image Size Too Large ";
                            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                        }


                        if(isset($_GET['Success']))
                        {
                            $Message = " Uw account is geregistreerd. ";
                            echo '<div class="alert alert-succes text-center">'.$Message. '
                                <a href="login.php">Inloggen</a>
                                </div>';

                        }
    }

?>