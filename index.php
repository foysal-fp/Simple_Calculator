 <?php
 	//declare(strict_types = 1);
 	include('includes/class-autoload.inc.php');
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Simple Calculator</title>
 </head>
 <body>
 

 <form action="includes/calc.inc.php" method="post">
       <h2> My Calculator with OOP</h2>
       <input type="number" name="num1" placeholder="First Number">
       <select name="oper">
       	<option value="add">Addition</option>
       	<option value="sub">Subtraction</option>
       	<option value="mul">Multiplication</option>
       	<option value="div">Division</option>
       </select>
       <input type="number" name="num2" placeholder="Second Number">

       <button type="submit" name="submit">Calculate</button> 
   </form>



 </body>
 </html>