<?php
/*берет начальную строку из файла(input.txt)*/   
$p=file_get_contents('input.txt');
/*сравнение обычной переменной с перевернутой*/
function reverse_comparison($str){
if ($str==mb_strrev($str)) {
	return true;
}
else return false;
}
/*для кириллицы*/
function mb_strrev($str, $enc='UTF-8'){
    return mb_convert_encoding( strrev( mb_convert_encoding($str, 'UTF-16BE', $enc) ), $enc, 'UTF-16LE');
}
/*проход через все варианты полиндромов и выбор наибольшего*/
function pol_check($p){
$p=mb_strtolower($p);
$p = preg_replace('/\s+/', '', $p);
$result[0]=false;
$result[1]=mb_substr($p,0,1);
$temp=$p;

for ($i=0; $i<=mb_strlen($p);$i++){
	/*отсечение символов в начале строки*/
	$temp=mb_substr($p,$i);
	while (mb_strlen($temp)>1){
		/*сравнение первого и последнего символов*/
		if (mb_substr($p,$i,1)==mb_substr($temp,(mb_strlen($temp)-1),1))
			{
	   		if (reverse_comparison($temp)){
	   			/*сравнение с наибольшим*/
	   			if (mb_strlen($temp)>mb_strlen($result[1])) {
	   				$result[0]=true;
	 	  			$result[1]=$temp;
	   			}

	   		}	
	   }
	   /*отсечение символа в конце строки*/
	   	$temp=mb_substr($temp,0,-1);   
    }
 } 
return $result;		
}
/*вывод результата*/
$result=pol_check($p);
echo $result[1];
 ?>