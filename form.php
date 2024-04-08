


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h3 class="text-center fw-bold bg-dark text-white display-3 p-3">FORM</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="ENTER YOUR USERNAME" autocomplete="off" name="username">
                    </div>
                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="Email" class="form-control" placeholder="ENTER YOUR EMAIL" autocomplete="off" name="Email">
                    </div>
                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="Password" class="form-control" placeholder="ENTER YOUR PASSWORD" autocomplete="off" name="Password">
                    </div>
                    <div class="form-grp">
                        <label for=""><h3>SELECT YOUR COURSE</h3></label><BR>
                        <input type="radio" name="course" value="JAVA">JAVA<br>
                        <input type="radio" name="course" value="FLUTTER">FLUTTER<br>
                        <input type="radio" name="course" value="REACT">REACT<br>
                        <input type="radio" name="course" value="VUE">VUE<br>
                    </div>
                    <div class="form-grp">
                        <label for=""><h3>SELECT YOUR FOOD</h3></label><BR>
                        <input type="checkbox" name="food[]" value="STEAK">STEAK<br>
                        <input type="checkbox" name="food[]" value="FRIES">FRIES<br>
                        <input type="checkbox" name="food[]" value="CHINESE">CHINESE<br>
                        <input type="checkbox" name="food[]" value="TIKKA">TIKKA<br>
                    </div>
                    <input type="Submit"  value="Submit" class="btn btn-dark mt-3">
                </form>
            </div>
            <div class="col-lg-6">
            <?php
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                ?>
                </div>
        </div>
    </div>
</body>
</html>