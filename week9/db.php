<?php
    if(isset($_POST['insert'])){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "lab2";
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $con = mysqli_connect($hostname, $username, $password, $database);
        
        $q = "INSERT INTO `form`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
        $result = mysqli_query($con, $q);
        if($result){
            echo 'Data Inserted';
        }else{
            echo 'Data Not Inserted';
        }
        mysqli_close($con);
    }
?>