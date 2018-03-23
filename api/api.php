<?php
    require '../connection.php';
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $gender=$_REQUEST['gen'];
        $sql="";

        if(isset($_REQUEST['id']) && (($_REQUEST['id'])>0)){

            $id=$_REQUEST['id'];
            $sql="update tblregistration set firstname='$fname',lastname='$lname',gender='$gender' WHERE id='$id'";
            operation();
        }
        elseif(isset($_REQUEST['deleteid']) || (($_REQUEST['deleteid'])>0)){

            $id=$_REQUEST['deleteid'];
            $sql="delete from tblregistration where id='$id'";
            operation();
        }
        else{
            $sql="insert into tblregistration(firstname,lastname,gender) VALUES ('$fname','$lname','$gender')";
            operation();
        }

    function operation(){
        global $conn,$sql;
        if(mysqli_query($conn,$sql)){
            echo "Operation done Successfully";
        }
        else{
            echo "Error in operation Mode";
        }
    }
?>