<?php
include('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- custom css file link -->
	<link rel="stylesheet" href="css/main.css?=<?php echo time(); ?>">

    <style>
        #submitBtn {
                background:var(--blackColor);
                border-radius: 3px;
                cursor: pointer;
                color:white;

                &:hover {
                    background: rgb(203, 203, 235);
                    color: var(--blackColor);
                }
            }
    </style>


</head>
<body>
    <div class="heading" style="background:url(images/login1.jpg) no-repeat" >
    
        <div class="form-container">
            
            <div class="overlay">
            </div>
                
            <div class="titleDiv">
                <h1 class="title">Login</h1>
                <span class="subTitle">Welcome back!</span>
            </div>

            <?php
                if (isset($_SESSION['noAdmin'])) {
                    echo $_SESSION['noAdmin'];
                    unset ($_SESSION['noAdmin']);
                }
            ?>

            <?php
                if (isset($_SESSION['accountCreated'])) {
                    echo $_SESSION['accountCreated'];
                    unset($_SESSION['accountCreated']);
                }        
            ?>

            
            <!-- form section starts -->
            <form action="" method="POST">
                <div class="rows grid">
                    <div class="row">
                        <label for="username">User Name:</label>
                        <input type="text" id="username" name="userName" placeholder="Enter User Name" required >
                    </div>
                    <div class="row">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your Password" required >
                    </div>
                    <div class="row">
                        <!-- <input type="submit" id="submitBtn" name="submit" value="Login" > -->
                        <button id="submitBtn" name="submit">Login</button>
                        <span class="registerLink">Don't have an Account?<a href="register.php">Register</a></span>
                    </div>
                </div>           

            </form>
        </div>

    </div>
    
</body>
</html>


<?php

    if (isset($_POST['submit'])) {
        
        $userName = $_POST['userName'];
        $passWord = $_POST['password'];

        $sql = "select * from tbluser where usernames='$userName' and passwords='$passWord'";

        $result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);

        $row = mysqli_fetch_assoc($result);


        if ($count ==1) {
            $_SESSION['loginMessage'] = '<span class="success">Welcome '.$userName. '</span>'; 
            header('location: ' .SITEURL. 'home.php');
            exit();
        }
        else {
            $_SESSION['noAdmin'] = '<span class="fail">'.$userName. ' is not Registered! </span>'; 
            header('location: ' .SITEURL. 'login.php');
            exit();
        }

    }
?>