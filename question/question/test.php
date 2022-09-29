<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>湖南大学常识测试</title>
</head>
<body style="background:#B8B8B8">
  <div style="background:#A00000; height:200px; width:100%;" >
    <div style="height:63px; width:202px; padding: 68px; background-repeat:no-repeat;">
      <img src="./logo.png",style="">
    </div>
  </div>



<h2><center>HNU七问</center></h2>

<form method="post" action="test.php">
  <div>
    <center>
      <label style="">1.湖南大学信息科学与工程学院有几层？</label>
    </center>
  </div>
  </br>
  <center>
    <input  style="width:50%;height:40px", name="ans1">
  </center>
    <br><br>

    <div>
      <center>
        <label style="">2.湖南大学东方红广场的毛主席雕像哪只脚在前？</label>
      </center>
    </div>
    </br>
    <center>
      <input style="width:50%;height:40px", name="ans2" >
    </center>
   <br><br>

   <div>
     <center>
       <label style="">3.东方红体育馆前有几个篮球场？</label>
     </center>
   </div>
   <br>
   <center>
     <input style="width:50%;height:40px", name="ans3" >
   </center>
   <br><br>

   <div>
     <center>
       <label style="">4.湖南大学信息安全协会英文简称是什么？</label>
     </center>
   </div>
   <br>
   <center>
     <input style="width:50%;height:40px", name="ans4" >
   </center>
   <br><br>

   <div>
     <center>
       <label style="">5.湖南大学综合楼一层最大的教室的教室号是多少?</label>
     </center>
   </div>
   <br>
   <center>
     <input style="width:50%;height:40px", name="ans5" >
   </center>
   <br><br>

   <div>
     <center>
       <label style="">6.湖南大学信息安全协会太上皇是谁？</label>
     </center>
   </div>
   <br>
   <center>
     <input style="width:50%;height:40px", name="ans6" >
   </center>
   <br><br>

   <div>
     <center>
       <label style="">7.天马学生公寓内有几个食堂？</label>
     </center>
   </div>
   <br>
   <center>
     <input style="width:50%;height:40px", name="ans7">
   </center>
   <br><br>


   <center>
     <input type="submit" name="submit" value="Submit" >
   </center>
</form>

<?php
// 定义变量并默认设置为空值
$ans1=$ans2=$ans3=$ans4=$ans5=$ans6=$ans7="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $ans1 = $_POST["ans1"];
    $ans2 = $_POST["ans2"];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $ans5 = $_POST['ans5'];
    $ans6 = $_POST['ans6'];
    $ans7 = $_POST['ans7'];
    if ($ans1!="6"||$ans2!="左"||$ans3!="6"||$ans4!="HNUSec"||$ans5!="108"||$ans6!="肖晟"||$ans7!="2")
    {
      echo "回答错误";
    }
    else
    {
      echo "<center><p>HNUCTF{Welcome_to_HNUCTF}</p></center>";
    }
}
?>

</body>
</html>
