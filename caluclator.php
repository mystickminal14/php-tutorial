<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        .calculator{
            border:2px solid black;
            border-radius:8px;
            padding:4em;
        }
        body{
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .form{
            display:flex;
            justify-content: center;
            flex-direction: column;
            gap:1em;
        }
    </style>
</head>

<body>
    <div class="calculator">
        <h1>My Calculator</h1>
<form method="POST" class="form">
    <input type="text" name="num1"/>
    <input type="text" name="num2">
<select name="choose">
    <option value="add">add</option>
    <option value="subtract">subtract</option>
    <option value="divide">division</option>
    <option value="multiply">multiply</option>
</select>
<input type="submit" name='submit' value="Calculate">
</form>
    </div>
    <?php
    if(isset($_POST['submit'])){
     $num1= $_POST['num1'];
     $num2= $_POST['num2'];
     $num3=$_POST['choose'];

     switch ($num3){
        case 'add':
        echo ' The sum of number is : ' .$num1+ $num2;
        break;
        case 'subtract':
        echo ' The difference of number is : ' .$num1- $num2;
        break;
        case 'divide':
        echo ' The division of number is : ' .$num1/$num2;
        break;
        case 'multiply':
        echo ' The multiplication of number is : ' .$num1* $num2;
        break;
     }
    }
?>
</body>
</html>
