<?php

 /*$star = "*" ;
 for ($i = 0 ; $i <3; $i++){
 	for ($j = 0 ; $j <= $i; $j++){
     echo "*";
 	}
 	echo "\n";
 }

 $star = 1;
for ( $i = 3 ; $i != 0 ; $i -- ) { 
	for ($j = 0 ; $j < $i  ; $j ++ ) {
        
         echo $star ;
         $star++ ;
	}
	$star = 1 ;
	echo "\n" ;
}*/
$array = ["A" , "B" ,"C" ];
for ( $i = 0 ; $i < 3 ; $i ++){
	for( $j = 0 ;$j <= $i ; $j ++ ){
		echo $array[$j] ;

	}
	echo "\n";
}
 
?>
