<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class='candidate'>
    <a href="view.php" style='background:skyblue;padding:0.5em; width:140px; display: block; text-align: center; text-decoration: none; color: black;'>View User</a>
         <h1>User Registration</h1>
         <?php
include 'connection.php';
$ids=$_GET['id'];
$sel="Select * from register where uid={$ids}";
$res=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($res);
if(isset($_POST['submit'])){
    $fname=$_POST['name'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $update = "Update  register SET `first_name`= '$fname',`last_name`='$lname',`dob`='$dob',`email`='$email',`phone`='$phone' WHERE uid='$ids'
   ";
$res = mysqli_query($conn, $update);
header('location:view.php');

    if($res){
        ?><script>
            alert('DATA Updated SUCCESSFULLY!!')
        </script><?php
    }else{
        ?><script>
        alert('ERROR WHILE Updating DATA!!')
    </script><?php
    }
}
?>
         <form method="POST">
            <label for="name"> First Name</label>
            <input type="text" value=" <?php echo $fetch['first_name'];  ?>" id='name' name='name'>

            <label for="lname">Last Name</label>
            <input type="text" id='lname' value=" <?php echo $fetch['last_name'];  ?>" name='lname'>

            <label for="dob">Date of Birth</label>
            <input type="date" id='dob' value=" <?php echo $fetch['dob'];  ?>"name='dob'>

            <label for="email">Email Address</label>
            <input type="email" id='email' value=" <?php echo $fetch['email'];  ?>"  name='email'>
            <label for="phone">Phone Number</label>
            <input type="text" id='phone' value=" <?php echo $fetch['phone'];  ?>"name='phone'>
            <input type="submit" name='submit' value="Update">
         </form>
    </div>
    
</body>
</html>

