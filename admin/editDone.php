<?php
include "../dp.php";
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nameupdate= $_POST['fname'];
                $amountupdate = $_POST['amount'];
                $genderupdate = $_POST['gender'];
                $emailupdate = $_POST['email'];
                $numberupdate = $_POST['number'];
                $serviceupdate = $_POST['service'];
                $locationupdate = $_POST['location'];
                $sno = $_POST['sno'];
                $status = $_POST['status'];
                $sql = "UPDATE `service_details` SET  `name` = '$nameupdate',`active` = '$status' , `email` = '$emailupdate', `gender` = '$genderupdate', `number` = '$numberupdate', `location` = '$locationupdate', `service` = '$serviceupdate', `amount` = '$amountupdate' WHERE `service_details`.`sno` = ('$sno');";
                $result = mysqli_query($conn,$sql);
                if($result){
                    header("location: list.php");
                }
            }
            
            ?>