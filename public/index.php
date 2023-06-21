<?php

$variable = "John";


echo $variable;
echo "Hello world";
echo PHP_EOL;  //end of line

$n = 10;
echo PHP_EOL;  //end of line
echo "<br>";
echo $n + 40;


$greetings = "Hello";

echo "<br>";

//concatination
echo $greetings . $variable;

echo "<br>";

//tolko imena peremennych
echo '$greetings $variable $n';
echo "<br>";
echo "$greetings $variable $n";  //razimenovaniye znachenie v stroku

//echo tolko string

echo "<br>";

$array = array(
	'key'=>'value',
	'key1'=>'value1'
);

print_r($array);

echo "</pre";


//ctrl + o   save file
echo "<br>";

$array = array(
        'value',
        'value1'
);

print_r($array);

echo "</pre";


function func()
{
	return 'OK';


}

echo "<br>";

echo func();


function func2(int $n, int $l)
{

	return $n + $l;
}

echo func2(10, 5);

//echo func('qwerty', 5);   tolko int mochno!



foreach ($array as $key => $value){
	echo "$key => $value <br>";
}

//bez perebora kluchey, tolko znacheniya
foreach ($array as $key => $value){
        echo "$value <br>";
}



echo "<pre>";
print_r($_GET);
echo "</pre>";




$form = "
<form>
<input type = 'text' name='name'>
<input type = 'submit'>
</form>
";

echo $form;


echo "<pre>";

print_r($_POST);
echo "</pre>";




//pre    TEGY ZAKRYVAT!!!!


