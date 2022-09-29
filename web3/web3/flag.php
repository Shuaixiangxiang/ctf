<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>flag在这</title>
  </head>
  <body style="background:#B8B8B8">
	<img src="./hack.jpg">
	<h1>我可是一天速成的大黑客，别蒙我，我知道你根本没有买flag，我微信小账本记得清清楚楚。</h1>
	<br><br>
	别费劲了少年，key是后端校验的，我记录了购买者的ip，除了购买者和我自己谁都看不到flag！
	<br><br>
	<a href="index.php" >还不快去买</p>
	<img src = "./weixie.jpg" >
  </body>
  	<?php
  	error_reporting(0);
		if($_SERVER["HTTP_X_FORWARDED_FOR"]=="127.0.0.1")
		{
			echo "HNUCTF{KFC_Cra2y_Thur5day}";
		}
		else
		{
			echo "";
		}
	?>
</html>