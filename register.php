<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $file=fopen("users.csv" , "a");
    fwrite($file, $username);
    fwrite($file, $email);
    fwrite($file, $password);
    fclose($file);
     echo "OKAY";
}
//echo "HANDLE THIS PAGE";
?>


