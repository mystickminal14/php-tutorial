<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn,.btn2{
            padding:0.5em;
            background:skyblue;
            color:black;
           cursor:pointer;
            text-decoration: none;
            border:2px solid black;
        
        }
        .btn2{
            background-color: red;
        }
       
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
<div>
  <div style='display:flex;justify-content:space-between;align-items:center;'>
  <h1>
        List of Users
    </h1>
    <a href="register.php" class='btn'>Register</a>
  </div>
    <table>
        <thead>
            <tr>
                <th>id </th>
                <th>First name </th>
                <th>Last name </th>
                <th>Date of Birth </th>
                <th>Email Address </th>
                <th>Phone Number </th>
               <th>operation</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include 'connection.php';
        $selectQuery = "SELECT * FROM register";
        $res = mysqli_query($conn, $selectQuery);
        $fetched = mysqli_fetch_array($res);
        
        while ($fetch = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $fetch['uid']; ?></td>
            <td><?php echo $fetch['first_name']; ?></td>
            <td><?php echo $fetch['last_name']; ?></td>
            <td><?php echo $fetch['dob']; ?></td>
            <td><?php echo $fetch['email']; ?></td>
            <td><?php echo $fetch['phone']; ?></td>
            <td style='display:flex;gap:0.5em;'>
            <a href="update.php?id=<?php echo $fetch['uid']?>" class='btn'>Update</a>

            <a href="delete.php?id=<?php echo $fetch['uid']?>" class='btn2'>Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
           
        </tbody>
    </table>
</div>
</body>
</html>
