<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="reg";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if(!$conn)
    {
    die("Connection Failed:" . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $techevents=$_POST['techevents'];
    $fungames=$_POST['fungames'];
    $culturals=$_POST['culturals'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sql_query = "INSERT INTO register( first_name,last_name,techevents,fungames,culturals,gender,phone,email)VALUES
    ('$first_name','$last_name','$techevents','$fungames','$culturals','$gender','$phone','$address','$email')";
    if (mysqli_query($conn, $sql_query))
    {
    echo "New Details Entry inserted successfully !";
    }
    else

    {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    ?>