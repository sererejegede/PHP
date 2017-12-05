<?php
//$sumEven=0;
//$sumOdd=0;
//	for($i = 0; $i < 11; $i++){
//		//print $i.'<br>';
//		if (($i % 2) == 0){
//			$sumEven = $sumEven + $i;
//		}else if(($i % 2) == 1)
//			$sumOdd = $sumOdd + $i;
//
//	}
//
//print $sumEven - $sumOdd;
spl_autoload_register(function ($class_name) {
    include_once "{$class_name}.php";
});

if(isset($_POST['numb1'])) $numb1 = $_POST['numb1'];
if(isset($_POST['numb2'])) $numb2 = $_POST['numb2'];
if(isset($_POST['method'])) $method = $_POST['method'];

$basicCalculator = new Assignment($numb1, $numb2);
switch($method){
   case 'plus':
       $basicCalculator->add();
       break;
   case 'subtract':
       $basicCalculator->subtract();
       break;
   case 'multiply':
       $basicCalculator->multiply();
       break;
   case 'divide':
       $basicCalculator->divide();
       break;
   case 'factorial':
       $basicCalculator->factorial();
       break;
   case 'sine';
	   $basicCalculator->sine();
	   break;
   case 'cosine';
	   $basicCalculator->cosine();
	   break;
   case 'tangent';
       $basicCalculator->tangent();
	   break;
   case 'logarithm';
       $basicCalculator->logarithm();
	   break;
   default: print 'No method was called';
}
// $arithmetic = new Assignment(16, 6);
// echo $arithmetic->add();
// echo $arithmetic->subtract();
// echo $arithmetic->multiply();
// echo $arithmetic->divide();
