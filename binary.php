<!DOCTYPE html>
<html>
<head>
	<title>DEC TO BIN</title>
</head>
<body>
<form method="post" action="">
  HOW many input: <input type="text" name="fname">
  <input type="submit">
</form>


</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    if (empty($name)) {
        echo "Name is empty";
    } else {
    			$count = ($name*$name);
    			?>
					<table>
					<tr>
						<th>COMBINATION</th>
						<th>AND-TABLE</th>
						<th>OR-TABLE</th>

					</tr>
					<tbody>
						
					<?php for ($i = 0; $i < $count; $i++) { 
							$data = str_pad(decbin($i), $name, '0', STR_PAD_LEFT);
						    $array = str_split($data);
						    $sum=0;
						    	foreach ($array as $key => $value) {
						    		$sum = $sum+$value;
						    	}
								if($sum==$name){
									$and = 1;
								}else{
									$and = 0;
								}

								if($sum>0){
									$or = 1;
								}else{
									$or=0;
								}




						?>
					<tr>
						
						<td><?php echo $data;?></td>
						<td><?php echo $and;?> </td>
						<td><?php echo $or;?> </td>

					</tr>

					<?php 
					} 
					?>

					</tbody>
		
					</table>


  <?php  }
}
?>