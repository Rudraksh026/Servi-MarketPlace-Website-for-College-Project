<?php
include "dp.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameupdate = $_POST['fname'];
    $amountupdate = $_POST['amount'];
    $genderupdate = $_POST['gender'];
    $emailupdate = $_POST['email'];
    $numberupdate = $_POST['number'];
    $serviceupdate = $_POST['service'];
    $locationupdate = $_POST['location'];
    $sno = $_POST['sno'];
    $num_length = strlen($numberupdate);
    $arr = explode('@', $emailupdate);
    $int_num = number_format($numberupdate);
    preg_match_all('!\d+!', $nameupdate, $matches);

    if (((count($matches[0])) == 0) && ($int_num < 9999999999 || $int_num > 6000000000) && $num_length == 10 && ($arr[1] == "gmail.com" || $arr[1] == "yahoo.com" || $arr[1] == "hotmail.com" || $arr[1] == "outlook.com" )) {

    $sql = "UPDATE `service_details` SET  `name` = '$nameupdate', `email` = '$emailupdate', `gender` = '$genderupdate', `number` = '$numberupdate', `location` = '$locationupdate', `service` = '$serviceupdate', `amount` = '$amountupdate' WHERE `service_details`.`sno` = ('$sno');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: deleteService.php");
    }
}

else if ($num_length != 10 || ($int_num > 9999999999 || $int_num < 6000000000)){
    echo '<script>swal ( "Oops" ,  "Phone number is not valid !" ,  "error" );</script>';
} 

else if ((count($matches[0])) > 0) {
    echo '<script>swal ( "Oops" ,  "Name does not contain any digit !" ,  "error" );</script>';
}



else if ($arr[1] != "gmail.com" && $arr[1] != "yahoo.com" && $arr[1] != "hotmail.com" && $arr[1] != "outlook.com" ){
    echo '<script>swal ( "Oops" ,  "Email is invalid !" ,  "error" );</script>';
}


else {
    echo '<script>swal ( "Oops" ,  "Invalid Details !" ,  "error" );</script>';
}
}

?>