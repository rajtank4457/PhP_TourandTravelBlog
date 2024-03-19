<?php
include('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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

            <!-- form section starts -->
            <form action="" method="POST">
                <div class="row grid">
                    <div class="row">
                        <center><h1>Register</h1></center>
                        <label for="username">User Name:</label>
                        <input type="text" id="username" name="userName" placeholder="Enter User Name" required >
                    </div>
                    <div class="row">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email" required >
                    </div>
                    <div class="row">
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter Your Number" required >
                    </div>
                    <div class="row">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your Password" required >
                    </div>
                    <div class="row">
                        <input type="submit" id="submitBtn" name="submit" value="Register" >

                        <span class="registerLink">Have an Account?<a href="login.php">Login</a></span>
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
        $email = $_POST['email'];
        $passWord = $_POST['password'];
        $phone = $_POST['phone'];

        $sql = "insert into tbluser set usernames='$userName',
                                        email='$email',
                                        passwords='$passWord',
                                        phone='$phone'";

        $res = mysqli_query($conn,$sql);

        if ($res == true) {
            $_SESSION['accountCreated'] = '<span class="success">Account ' .$userName. ' Created.</span>';
            header('location: '.SITEURL. 'login.php');
            exit();
        }
        else {
            $_SESSION['unSuccessful'] = '<span class="fail">Account ' .$userName. ' Failed.</span>';
            header('location: '.SITEURL. 'register.php');
            exit();
        }

    }

?>











