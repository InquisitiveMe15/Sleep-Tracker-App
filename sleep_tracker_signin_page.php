<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $password = $_POST["yourpassword"]; 
    
    $sql = "Select * from users where firstname='$firstname' AND secondname='$secondname'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['secondname'] = $secondname;
                header("location: sleeptracker_new_entry_page.html");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin page</title>
    <!-- stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sleep_tracker_signin_page.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9daeb8e3e3.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- javascript(bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

        <script src="sleep_tracker_signin_page.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-md" style="background-color:#b74cff;">
        </div>
        <a class="navbar-brand" href="">SleeeepTracker</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggler"
            aria-controls="toggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        </button>
        <div class="collapse navbar-collapse" id="toggler">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="landing_page.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./sleep_tracker_signin_page.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./sleep_tracker_signup_page.php">Signup</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="row">
        <div class="container col-md-6">
            <div class="heading">
                <h3>Sign in and start tracking your sleeeep!!</h3>
            </div>
            <form action="/sleeptracker/git_project/sleep_tracker_signin_page.php" method="post" name="Signin" onsubmit="return Validation()";>
                <div class="form-elements">
                    <label for="firstname"></label>
                    <input type="text" name="firstname" id="firstname" placeholder="Enter your first name">
                </div>
                <div class="form-elements">
                    <label for="secondname"></label>
                    <input type="text" name="secondname" id="secondname" placeholder="Enter your last name">
                </div>
                <div class="form-elements">
                    <label for="yourpassword"></label>
                    <input type="password" name="yourpassword" id="yourpassword" placeholder="Enter your password"><br>
                </div>
                <div class="buttons">
                    <input class="resetbtn btn btn-outline-light" type="reset" value="Reset all">
                    <input class="submitbtn btn btn-dark" type="submit" value="Login">
                </div>
            </form>
        </div>
        <div class="img col-md-3">
            <img
                src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/240/whatsapp/273/sleeping-face_1f634.png"><br>
            <h3>SleeeepTracker</h3>
        </div>
    </div>
</body>

</html>