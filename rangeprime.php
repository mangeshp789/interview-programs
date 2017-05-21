<?php
$rangestart = 216;
while($rangestart<=619){
 $div_count=0;
  for($i=1;$i<=$rangestart;$i++){
     
      if(($rangestart%$i)==0){
              
             $div_count++;
            
            }
    
    }
  if($div_count<3){
    
    echo $rangestart."," ;
    }
  $rangestart++;
  
}