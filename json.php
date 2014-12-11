<?php
/*
	convert given JSON to array and get given value
	usage: [[+jsontv:json=`fieldname`]]
*/
$options;
$input;

if(!empty($options)){
	$array = json_decode($input,TRUE);
	return $array[$options];
}

?>