<?php

include("../one_conn.php");

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $image = $_FILES["image"]["name"];

    $sql = "insert into employee (name , email , password , image) values ('$username' , '$email' , '$password' , '$image')";
    $result = mysqli_query($conn , $sql);

    if($result == true){
        echo "Your record has been inserted";
    }else{
        echo "No record has been inserted";
    }
}

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(isset($_FILES["image"])){
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp , "images/" .$file_name);

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container col-lg-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-grp">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="">
            </div>

            <div class="form-grp">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="">
            </div>

            <div class="form-grp">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="">
            </div>

            <div class="form-grp">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" id="">
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-dark mt-3">
        </form>
    </div>
    
</body>
</html>