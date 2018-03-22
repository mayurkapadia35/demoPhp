<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h4 align="center">Welcome to my Form</h4>
    <form name="formname">
        <table align="center">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" id="fname" placeholder="First Name" required class="form-control">
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" id="lname" placeholder="Last Name" required class="form-control">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" id="radmale" value="Male" required checked>Male
                    <input type="radio" name="gender" id="radfemale" value="Female" required>Female
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" id="btnsave" name="btnsave" value="Save" class="btn btn-outline-primary">
                    <input type="reset" id="btnreset" name="reset" value="Reset" class="btn btn-outline-warning"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<script>
    $(document).ready(function () {
        $("#btnsave").click(function () {                       //Save Button Insertion
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var gen;
            if (document.getElementById("radmale").checked) {
                gen = "Male";
            } else {
                gen = "Female";
            }

            $.ajax({
                type: "POST",
                url: "./api/api.php",
                data: {'fname': fname, 'lname': lname, 'gen': gen},
                success: function (data) {
                    console.log(data);
                }
            });

//            $.post('./api/api.php',{
//                'fname':fname,
//                'lname':lname,
//                'gen':gen
//            },
//                function (data,status) {
//                    alert("Data is"+data+"\n status is "+status);
//                });
        });
    });
</script>