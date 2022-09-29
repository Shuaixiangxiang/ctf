<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>V我50！</title>
  </head>
  <body style="background:#B8B8B8">
	<img src="./logo.jpg">
	<br><br>
	世界上有70多亿人 ,250多亿只鸡 ,也就是说如果鸡决定与人类开战 ,每个人平均要打三只鸡。 所以请记住 ，不管你多么孤独 ，这世界上的某个角落里有三只鸡是需要你去对抗的"
	<br><br>
	什么？flag？在flag.php里面，除非你拿到key去兑换flag。
	来吧，加上我的微信，v我50，我就把key告诉你！
	<br><br>
	<img src="./vx.jpg">
  <form method="post" action="index.php">
    <div>
    <center>
      <label style="margin">输入你的key</label>
    </center>
    </div>
    <center>
    <input  style="width:50%;height:40px" name="ans1">
    </center>
    <center>
     <input type="submit" name="submit" value="验证key以获取flag" style="width:300px;height:50px">
    </center>
   </form>
   	<?php
	$ans1="";
   	$ans1err="";
   	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    	$ans1 = $_POST['ans1'];
	    	if (md5($ans1)!="0cd4da0223c0b280829dc3ea458d655c")
	    	{
	     		echo "憋想着白嫖了，我不管我要吃原味鸡";
	    	}
	    	else
	    	{
	      		echo "<center><p>HNUCTF{KFC_Cra2y_Thur5day}</p></center>";
	    	}

	}
   	?>
   		   <!--
   		   		if (md5($ans1)!="0cd4da0223c0b280829dc3ea458d655c")
	    	{
	     		echo "憋想着白嫖了，我不管我要吃原味鸡";
	    	}
	    		else
	    	{
				不告诉你~~~
	    	}-->

  </body>
</html>
