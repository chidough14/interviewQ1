<<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

    $conn = mysqli_connect('localhost', 'root', '', 'application');

    if($conn){
       echo 'connected <br><br><br>';
    } else {
       echo 'not connected<br>';
    }
   
    $sql = 'SELECT * from appform';
    $res = mysqli_query($conn, $sql);

    while($gg = mysqli_fetch_array($res)){
        echo '<h2>'.$gg["id"].'</h2>';
        echo '<table>';
        echo '<tr>';
        echo '<td>Name</td>';
        echo '<td>Surname</td>';
        echo '<td>Phone</td>';
        echo '<td>Email</td>';
        echo '<td>Cover letter</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>'.$gg["first_name"].'</td>';
        echo '<td>'.$gg["surname"].'</td>';
        echo '<td>'.$gg["phone"].'</td>';
        echo '<td>'.$gg["email"].'</td>';
        echo '<td>'.$gg["cover_letter"].'</td>';
        echo '</tr>';
        echo '</table>';
    }

?>
    
</body>
</html>