<?php

    $connection = mysqli_connect('localhost','root','','dbTour&Travel');

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $member = $_POST['member'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];


        $request = " insert into tblbook_form(name,email,phone,address,location,member,arrivals,leaving) values('$name','$email','$phone','$address','$location','$member','$arrivals','$leaving')";

        mysqli_query($connection,$request);

        header('location:book.php');
    }
    else {
        echo 'Something went wrong try again';    
    }

?>