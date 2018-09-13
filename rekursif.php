<?php 
	$batasnya1= 10;
	function rekursif ($a=1){
			
			Global $cbatasnya1;
			echo "*";
			$a++;

    		if( $a<=$batasnya1){
    			rekursif ($a);			
			}
			else{
				echo "<br>";
				$batasnya1--;

				if($batasnya1!=0){
					rekursif ();
				}
			}
	}

	rekursif();

	/*========================================================*/
 echo "<br>";

	$batas =1;
	function rekursif1($b=1){
		Global $batas;
		echo "$b";
		$b++;

		if ($b<=$batas) {
			rekursif1($b);
		}

		else{
			echo "<br>";
			$batas++;
			if ($batas <= 5) {
				rekursif1();
			}
		}
	}
	rekursif1();
 ?>5);
?>
