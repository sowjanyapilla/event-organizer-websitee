<?php
include("database.php");
session_start();
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $firstname = stripslashes($firstname);
    $firstname = addslashes($firstname);


    $lastname = $_POST["lastname"];
    $lastname = stripslashes($firstname);
    $lastname = addslashes($firstname);


    $phonenumber = $_POST["phonenumber"];
    $phonenumber = stripslashes($phonenumber);
    $phonenumber = addslashes($phonenumber);

    $email = $_POST['email'];
    $email = stripslashes($email);
    $email = addslashes($email);


    $techevents = $_POST['techevents'];
    $fungames = $_POST['fungames'];
    $culturals = $_POST['culturals'];
    $gender = $_POST['gender'];
    $str = "SELECT email from user WHERE email='$email' ";
    $result = mysqli_query($con, $str);


    if((mysqli_num_rows($result))>0){
    
        echo "<center><h3><script>alert('Sorry.. you are already registered!!');</script><h3></center>";
        
    }
    else
    {
        $str = "insert into user set firstname='$firstname', lastname='$lastname',email='$email',phonenumber='$phonenumber' ";
        if ((mysqli_query($con, $str)))
            echo "<center><h3><script>alert('congrats.. you are successfully registerd!!');</script></h3></center>";
            
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
font-family: Calibri, Helvetica, sans-serif;
background-color: pink;
}.container {
padding: 50px;
background-color: lightblue;
}
input[type=text], input[type=password], textarea {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
background-color: orange;
outline: none;
}
div {
padding: 10px 0;
}
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
.registerbtn {
background-color: #4CAF50;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
.registerbtn:hover {
opacity: 1;
}
</style>
</head>
<body>
<form name="regist" method="post" action="registration.php">
<div class="container">
<center> <h1> Student Registration Form</h1> </center>
<hr>
<!--ID:<input type="number" name="id" value=""></br>
NAME:<input type="text" name="name" value=""></br> -->
<label> Firstname: </label>
<input type="text" name="first_name" placeholder= "Firstname" size="15" required />
<label> Lastname: </label>
<input type="text" name="last_name" placeholder="Lastname" size="15"required />
<div>
<select name="techevents"><option value="techevents">techevents</option>
<option value="hackathon">hackathon</option>
<option value="blindcoding">blindcoding</option>
<option value="fasttyping">fasttyping</option>
<option value="bugfixing">bugfixing</option>
<option value="competetive programming">competetive programming</option>
<option value="quiz">quiz</option>
</select>
<select name="fungames">
<option value="fungames">fungames</option>
<option value="Musical Chair">Musical Chair</option>
<option value="treasurehunt">Traesurehunt</option>
<option value="blindfoldDrawing">blindfoldDrawing</option>
<option value="waterballoon fight">waterballoon Fight</option>
<option value="tugofwar">tugofwar</option>
<option value="Freeze dance">freeze dance</option>
</select>
<select name="culturals">
<option value="culturals">culturals</option>
<option value="singing">singing</option>
<option value="dancing">dancing</option>
<option value="dramas">dramas</option>
<option value="Yoga Performance">Yoga performance</option>
<option value="standupcomedy">standupcomedy</option>
</select>
</div>
<div>
<label>
Gender :
</label><br>
<input type="radio" value="Male" name="gender" > Male
<input type="radio" value="Female" name="gender"> Female
</div>
<label>
Phone :
</label>
<input type="text" name="phone" placeholder="phone no." size="10"/ required>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<button type="submit" class="registerbtn" name="submit">Register</button>
</form>
</body>
</html>

