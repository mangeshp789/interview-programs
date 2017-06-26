<?php

/**
* 
*/
echo "<h2>Palindrome example without using strrev() string function </h2>";

class palindrome
{
	public function getData($word){


		$countLenght = strlen($word);

		$reverseString="";

		for($i=$countLenght-1; $i>=0; $i--){

				$reverseString.= $word[$i];
		}

		return $this->compereString($word,$reverseString);
	}

	public function compereString($word,$reverseString){
			
		if(strcmp($word, $reverseString)==0){

			return $word. ' is palindrome';
		
		}else{

			return $word.' is not palindrome';
		}
	}
}

$obj = new palindrome();
echo $obj->getData("RADAR");
echo "<br>";
echo $obj->getData("CHECK");
echo "</br>";
echo "</br>";
/*Anna,Civic,Kayak,Level,Madam,Mom,Noon,Racecar*/


echo "<h2>Palindrome example using strrev() string functon</h2>";


	$word_str = "MANGESH";
	$reverseString_str=strrev($word_str);

		if(strcmp($word_str,$reverseString_str)==0){

			echo  $word_str. ' is palindrome';

		}else{

			echo  $word_str.' is not palindrome';
		}

	
