<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>let test it</title>
</head>
<body>
    <div>   
        <form method="POST">
            <input type='text' name='val'>
            <input type='submit' name='submit' value='Submit'>
        </form>
    </div>
    

    <?php
    if(isset($_POST['submit'])){
        $value= $_POST['val'];
    switch($value){
        case 'blue': echo'your fav color is'.$value;
        break;
        case 'red': echo "your fav color is {$value}";
        break;
        default: echo 'Sorry, I am not sure about your favourite color';
    }
    }

    ?>


</body>
</html>