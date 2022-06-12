<?php
if(isset($_POST['submit'])){
    $username = $_POST["email"];
    $password = $_POST["password"];

loginUser($username, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $file=fopen("users.csv" , "r");
    $email = stripslashes($email);
    $csvStr = file_get_contents('users.csv');
    $findEmail = $email;
}

echo "WELCOME";

