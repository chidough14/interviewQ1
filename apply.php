<?php
 $first_name = $_POST['first_name'];
 $surname = $_POST['surname'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $cover_letter = $_POST['cover_letter'];
 //$passport = $_POST['passport'];
 //$resume = $_POST['resume'];


 $conn = mysqli_connect('localhost', 'root', '', 'application');

 if($conn){
    echo 'connected <br><br><br>';
} else {
    echo 'not connected<br>';
}

$qry = "SELECT count(id) as cid  from appform";

$res = mysqli_query($conn, $qry);
$ddd = mysqli_fetch_array($res);
//echo $ddd['cid'];

 if ($ddd['cid'] >= 4){
   echo 'Application closed';
} else {
    $sql="INSERT INTO appform VALUES (null, '$first_name', '$surname', '$phone', '$email', '$cover_letter')";
    $result = mysqli_query($conn, $sql);
    
    if ($result){
        echo 'Success';
    } else {
        echo 'failed';
    }
}


?>