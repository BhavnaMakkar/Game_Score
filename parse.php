<?php
    include("connection.php");
   

    $string = file_get_contents("playerinfo.json");
   $jsonRS = json_decode ($string,true);
    
    



    foreach ($jsonRS as $rs) {
     
       
         $name=$rs["name"]." ";
        
        $score=$rs["score"]." ";
        
        $rank=$rs["rank"]." ";
        
         $photo=$rs["photo"]." ";
        
        

        foreach($rs["activity"] as $ra)
        {
           
            
            
             $activityTitle= $ra["activityTitle"]." ";
            
             $activityDetail=$ra["activityDetail"]."";
            
             $sql="INSERT INTO playerinfo (pname, score, rank,photo,activity_title,activity_detail) 
                VALUES ('$name', '$score', '$rank','$photo','$activityTitle','$activityDetail')";
                if ($conn->query($sql) === TRUE) 
                {
                   
                }   
                else 
               {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    echo "<br>";
                }
            }
        }
        foreach ($jsonRS as $rs) {
       
         
         $name=$rs["name"]." ";
        
        $score=$rs["score"]." ";
        
        $rank=$rs["rank"]." ";
        
         $photo=$rs["photo"]." ";
         

        foreach($rs["history"] as $rh)
            {
               
                
                $historyTitle=$rh["historyTitle"]." ";
                
                $historyDetail=$rh["historyDetail"]."";
                
             $sql="INSERT INTO playerinfo (pname, score, rank,photo,history_title,history_detail ) 
            VALUES ('$name', '$score', '$rank','$photo','$historyTitle','$historyDetail')";
               
                if ($conn->query($sql) === TRUE) 
                {
                    
                }   
                else 
               {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    echo "<br>";
                }
            }
        }
           
        
echo "Data Inserted";
           
    

   
?>

