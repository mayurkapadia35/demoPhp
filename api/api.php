<?php
    require '../connection.php';

    //global $conn;

        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $gender=$_REQUEST['gen'];

        if(isset($_REQUEST['id']) || (($_REQUEST['id'])>0)){
                //echo $_REQUEST['id'];
            $id=$_REQUEST['id'];
            echo $sql="update tblregistration set firstname='$fname',lastname='$lname',gender='$gender' WHERE id='$id'";
//            if(mysqli_query($conn,$sql)){
//                echo "Updated Successfully";
//            }
//            else
//            {
//                echo "Error in Updating Mode";
//            }
        }
        else{

//            echo $gender;
            echo $sql="insert into tblregistration(firstname,lastname,gender) VALUES ('$fname','$lname','$gender')";
//            if(mysqli_query($conn,$sql) or die("this is error for insert query")){
//                echo "Inserted Successfully";
//            }else{
//                echo "Error in inserting mode";
//            }
        }








?>