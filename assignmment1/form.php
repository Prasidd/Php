<?php

if(isset($_POST['submit'])){
    if(
        !empty($_POST['name']) ||
        !empty($_POST['password'])
    ){
    $name = $_POST['name'];
    $password = $_POST['password'];

      function checkCredentials($inputName, $inputPassword) {
        $nam = "Prasiddha";
        $pass = "selLdrpra20";

        if ($inputName === $nam && $inputPassword === $pass) {
            header("Location: success.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
        checkCredentials($name, $password);
    }
    else{
            echo "Please fill out all the fields <br>";
            echo '<a href="index.php">Go Back</a>';
        }
}else{
    echo "This page isn't available";
    header("Location : index.php");
}



