<?php
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["name"])==TRUE)
            {
                echo "Name can not be blank</br>";
            }
        if(is_numeric($_POST["mobileno"])==FALSE)
            {
                echo "Enter valid Mobile Number</br>";
            }
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"] ))
            {
                echo "Enter valid Email Id</br>";
            }
    }
?>