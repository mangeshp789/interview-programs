<?php

$data = "FourscoreracecarsthatandsevenyearsagoourfaathersbroughtforthonthiscontainentanewnationconceivedinzLibertyanddedicatedtothepropositionthatallmenarecreatedequalNowweareengagedinagreahtcivilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedicatedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoheregavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsecratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldadswfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinishedworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromthesehonoreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothavediedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth";
for($i=0; $i<strlen($data); $i++ )  
{  
    $palindrome = true; 
    $offset = 1; 
    while($palindrome)  
    { 
        $word = substr($data, $i-$offset, ($offset*2)+1 ); 
    //echo $word.'</br>';
    //echo $i-$offset.'</br>';
    //echo ($offset*2)+1 .'</br>';
    //echo substr("Hello world",$i-$offset,($offset*2)+1)."<br>";    
        if( $word == strrev($word) ) {
            //echo "if"; 
            print strlen($word) .' '. $word.'<br />'; 
        } else { 
            //echo "else";
            $palindrome = false; 
        } 
        $offset++; 
    }

    
} 


?>