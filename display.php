<?php
    require 'connection.php';
    $sql="select * from tblregistration";
    $res=mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display All</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body class="container">
    <table align="center" class="table table-hover">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th colspan="2">Actions</th>
        </tr>

        <?php
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><a href="index.php?Id=<?php echo $row['id']; ?>" >Edit</a></td>
                        <td><a href="javascript:void(0)">Delete</a></td>
                    </tr>
        <?php
                }
            }

        ?>
    </table>
</body>
</html>