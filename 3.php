<?php

spl_autoload_register(function ($class_name) {
	include_once "library/{$class_name}.php";
});

//$cal = new Calculator(40, 5);
//$cal->factorial();



//http://localhost/test/x/3.php?numb1=20&numb2=30&method=add
$method = '';
$num_first = null;
$num_second =  null;

//if(isset($_GET['numb1'])) $num_first = $_GET['numb1'];
//if(isset($_GET['numb2'])) $num_second = $_GET['numb2'];
//if(isset($_GET['method'])) $method = $_GET['method'];

 if (!empty($argv[1]))
     $num_first = $argv[1];
if (!empty($argv[2]))
	$method = $argv[2];
 if (!empty($argv[3]))
     $num_second = $argv[3];








     $cal = new Calculator($num_first, $num_second);
 switch($method){
     case 'plus':
         $cal->add();
         break;
     case 'subtract':
         $cal->subtract();
         break;
     case 'multiplyBy':
         $cal->multiply();
         break;
     case 'divideBy':
         $cal->divide();
         break;
     case 'factorial':
         $cal->factorial();
         break;
	 default: print 'No method was called';
 }
