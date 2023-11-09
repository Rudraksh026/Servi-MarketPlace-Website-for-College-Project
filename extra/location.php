<?php
    include "../dp.php";
    $sql = "SELECT * FROM `service_details` WHERE `sno` >= 30 AND `sno` <= 40;";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    $range = 1;
    if($row >0){
        while($data = mysqli_fetch_array($result)){
            $temp = $data["location"];
            $i=0;
            $sql2 = "SELECT * FROM `locate`;";
            $result2 = mysqli_query($conn,$sql2);
            $limit =0;
            while($data2 = mysqli_fetch_array($result2)){
                if($data2["locationName"] == $data["location"] ){
                    $i++;
                    echo $range.' '.$data['name'].' Not Done '.$data["location"].' '.$i.' <br>';
                    break;
                }
                
                $limit++;
            }
            echo $limit." ";
            if($i == 0){
                if($temp == "NarendraNagar" || $temp == "Haridwar"){}
                else{
                echo  $range.' '.$data['name'].' Done '.$data["location"].' '.$i.' <br>';
                $sql3 = "INSERT INTO `locate` (`locationName`) VALUES ('$temp');";
                    mysqli_query($conn,$sql3);
                }
            }
            $range++;
        
        }
    }
?>