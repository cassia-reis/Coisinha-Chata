<?php

header('Content-Type: application/json');

Sum();

function Sum()
{
	$p =  $_GET['p'];

// operacao

$data = null;

if(is_numeric($p))
{
	$p = $p + 5;

	$data = array('result'=> $p);
}
else
{
	$data = array('result'=> 'ERROR');
}

echo json_encode($data, JSON_PRETTY_PRINT);
}

