<?php
function palindromo($str){
	if(strrev($str) == $str){
		return 'true';
	}else{
		return 'false';
	}
}
$palavra = 'arara';
echo palindromo($palavra);