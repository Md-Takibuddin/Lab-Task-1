<?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = strlen($_POST["password"]);


    if(is_numeric($fname)||is_numeric($lname)){
        echo "First name and Last Name should not contain numeric value </br>";
    }
    else{
        echo" Name: ".$fname." ".$lname."</br>";
    }
    echo"Age : ".$_POST["age"]."</br>";

     if(!isset($_POST["designation"])){
        echo"Designation must be selected </br>";
    }
    else{
        echo "Designation: ". $_POST["designation"]."</br>";
    }

    if(!isset($_POST["java"])&& !isset($_POST["php"])&&!isset($_POST["cp"]) ){
        echo"Preferred language must be selected";
    }
    else{
        echo "Preferred language : ";
        if(isset($_POST["java"])){
            echo " Java ";
        }
        if(isset($_POST["php"])){
            echo  " PHP ";
        }
        if(isset($_POST["cp"])){
            echo " C++ ";
        }
    }

    if(empty($_POST["email"])){
        echo "</br> Email should not be empty";
    }
    else{
        echo "</br> Email ".$_POST["email"]."</br>";
    }
    if($password<6){
        echo "</br> Password should be more than 6 characters";
    }









?>