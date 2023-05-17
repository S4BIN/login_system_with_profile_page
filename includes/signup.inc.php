<?php

if(isset($_POST["submit"])) 
{
    //Grabbing the data
    $uid = $_POST["uid"];
    $uid = $_POST["pwd"];
    $uid = $_POST["pwdRepeat"];
    $uid = $_POST["email"];

    //Instantiate SignupContr class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    //Running error handlers and user signup

    //Going to back to front page
}