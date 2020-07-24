<!DOCTYPE html>
<html>
<head>
	<title>Q1PA2 : LOOP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>

		.container1 {
		  position: relative;
		  text-align: center;
					}
		.align {
		  position: absolute;
		  top: 68%;
		  left: 30%;
					}
		.box{
			background: transparent;
			border-style: none none solid none;
			border-color: white;
			font-size: 50px;
			width: 150px;
			text-align: center;
			font-family: Century;
		}
		.random{
 			position: absolute;
		 	top: 38%;
		  	left: 59%;
		  	font-size:100px;
		  	font-family: Century;

					}
		.generate{
 			position: absolute;
		 	top: 10%;
		  	left: 385%;

					}

		.message {
			position: absolute;
		 	top: 78%;
		  	left: 43%;
		  	font-size:30px;
		  	font-family: Century;

					}
	</style>

</head>

<body style="font-family: Arial;">
<h2><center> Generate a 3-digit code and type it in the box to unlock the &#x1f512; <!--lock icon-->. If it doesn't work, generate a code again. </center></h2>

<div class="container1">
  	<img src="code.jpg" alt="lock code" />

  	
  	<div class="align"> 
  		
  		<form method="get">
	  
	  		<input type="text" class="box" name="code" /><br/>

	  	<div>
			<input type="submit" class="generate btn btn-primary" name="refresh" value = "&#128260;Generate Code"/>
		</div>

	  			<h2>CODE</h2>

	  	<input type="submit" class="btn btn-success" name="submitcode" value="Submit Code"/>
	  	
	  	</form>
	</div>
</div>


	<?php
	$num="123";
	$code=$_GET['code'];
	$random= str_shuffle($num);

		if(isset($_GET['refresh'])){

			for ($i=0; $i<1; $i++){
			echo "<p class='random'> " .  $random . "</p>";
			/*while($ctr < 1) {
    		echo "<p class='random'> " . $random  . "</p>";
    		$ctr++;
			*/
			}
		}

		if(isset($_GET['submitcode']))
		{
			echo "<p class='message'>";
			

			if ($code=="312"){
				echo "You got it right!";
			}
			elseif (empty($code)){
				echo "Oops! No code found!";
			}
			else{
				echo "Try again!";
			}
			
			
			echo "</p>";
}
	?>


</body>
</html>