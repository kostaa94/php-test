<?php   
$p='Sum summus mus';
$p=mb_strtolower($p);
$p = preg_replace('/\s+/', '', $p);


function reverse_comparison($str){
if ($str==strrev($str)) {
	return true;
}
else return false;
}

function pol_check($p){
$temp=$p;
for ($i=0; $i<=count($p);$i++){
	$temp=substr($p,$i);

	while (count($temp)>1){ 
		if (substr($p,$i,1)==substr($temp,count($temp)-1,1){
	   		if (reverse_comparison($temp)){
	   			$result[0]=true;
	   			$result[1]=$temp;
	   			return $result;
	   		}	
	   }
	   else	{
	   	$temp=substr($temp,0,-1);
	   }
	   
    }
 }
 $result[0]=false;
 $result[1]=substr($p,0,1);
 return $result;
}

var_dump(pol_check($p));




 ?>З