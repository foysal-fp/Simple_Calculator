 <?php
 	//declare(strict_types = 1);
 	include('class-autoload.inc.php');

 	$oper =$_POST["oper"];
 	$num1 =$_POST["num1"];
 	$num2 =$_POST["num2"];


 	$calc = new Calc((string)$oper,(int)$num1,(int)$num2);

 	try {

 		echo $calc->calculator();
 		
 	} catch (TypeErroe $e) {

 		echo "Erro!!" . $e->getMassage();
 		
 	}



 ?>