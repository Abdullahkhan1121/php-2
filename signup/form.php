<?php
 include ("../config/one.php");

//  if(isset($_POST['Submit'])){
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['Password'];

//     $sql = "insert into users(name , email , password) values('$username' , '$email' , '$password')";
//     $result = mysqli_query($conn , $sql);

//     if($result ==true){
//         echo "<br> Your Record has been inserted";
//     }else{
//         echo "<br> No Record has been inserted";
//     }
// }

if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['Password'];

    $sql = "select * from users where name = '$username' and email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    if($result->num_rows>0){
        while($rows = mysqli_fetch_assoc($result)){
            echo "<br> Login Successful!";
            echo "<script>setTimeout (function(){
                window.location.href= 'login.php'
            },4000)</script>";

        }
    }  else{
            echo "<br>LOGGED IN FAILED";
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="" method="POST">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Your User Name" autocomplete="off">
                    </div>
                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" autocomplete="off">
                    </div>
                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="password" name="Password" class="form-control" placeholder="Enter Your Password" autocomplete="off">
                    </div>
                    <input type="Submit" value="Submit" name="Submit" class="btn btn-success mt-3">
                </form>
    </div>
</body>
</html>