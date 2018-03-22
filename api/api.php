<?php
    require '../connection.php';

    //global $conn;

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gen'];


        $sql="insert into tblregistration(firstname,lastname,gender) VALUES ('$fname','$lname','$gender')";

        if(mysqli_query($conn,$sql)){
            echo "Inserted Successfully";
        }else{
            echo "Error in inserting mode";
        }



?>