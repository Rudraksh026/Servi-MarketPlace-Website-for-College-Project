<?php
    include "../dp.php";
    $sql = "SELECT * FROM `service_details` WHERE `sno` >= 35 AND `sno` <= 70;";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    $range = 1;
    if($row >0){
        while($data = mysqli_fetch_array($result)){
            $temp = $data["service"];
            $i=0;
            $sql2 = "SELECT * FROM `services`;";
            $result2 = mysqli_query($conn,$sql2);
            $limit =0;
            while($data2 = mysqli_fetch_array($result2)){
                if($data2["serviceName"] == $data["service"]){
                    
                    $i++;

                    echo $range.' '.$data['name'].' Not Done '.$data["service"].' '.$i.' <br>';
                    break;
                }
                
                $limit++;
            }
            echo $limit." ";
            if($i == 0){
                echo  $range.' '.$data['name'].' Done '.$data["service"].' '.$i.' <br>';
                $sql3 = "INSERT INTO `services` (`serviceName`) VALUES ('$temp');";
                    mysqli_query($conn,$sql3);
                    
            }
            $range++;
        
        }
    }
?>