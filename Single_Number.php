<?php 
	
	$a = [1,2,2,3,3,4,4];
	
	
	$result = count($a);
	
	for($i=0;$i< $result; $i++){
		$b = 0;
		for($j=0;$j<$result; $j++){
			
			if($a[$i] == $a[$j]){
				$b += 1;
			}
		}
		if($b == 1){
			echo ($a[$i].' ') ;
		}
	}
	
