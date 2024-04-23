<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
<body>
   
    <div class='candidate'>
    <a href="view.php" style='background:skyblue;padding:0.5em; width:140px; display: block; text-align: center; text-decoration: none; color: black;'>View User</a>
         <h1>User Registration</h1>
         <form method="POST">
            <label for="name"> First Name</label>
            <input type="text" id='name' name='name'>

            <label for="lname">Last Name</label>
            <input type="text" id='lname' name='lname'>

            <label for="dob">Date of Birth</label>
            <input type="date" id='dob' name='dob'>

            <label for="email">Email Address</label>
            <input type="email" id='email' name='email'>
            <label for="phone">Phone Number</label>
            <input type="text" id='phone' name='phone'>
            <input type="submit" name='submit' value="Register">
         </form>
    </div>
    
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $fname=$_POST['name'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $insert = "INSERT INTO `register`(`first_name`, `last_name`, `dob`, `email`, `phone`) 
    VALUES ('$fname', '$lname', '$dob', '$email', '$phone')";
$res = mysqli_query($conn, $insert);

    if($res){
        ?><script>
            alert('DATA INSERTED SUCCESSFULLY!!')
        </script><?php
    }else{
        ?><script>
        alert('ERROR WHILE INSERTING DATA!!')
    </script><?php
    }
}
?>