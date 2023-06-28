<?php

//razdaem stranicy perexoda

if($_SERVER['REQUEST_URI'] === '/')
{
	echo "Main page";
}
elseif(substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?')) === '/string')
{
	require('string/index.php');
}
