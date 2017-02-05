
<html>
 <head>
  <style>
    .input1 {width: 40px;}
  </style>
 </head>
    <form action="Task2.php" method="post">

      <input type="text" name="num2" class="input1" placeholder="1">
      <input type="text" name="num3" class="input1" placeholder="2">
      <input type="text" name="num4" class="input1" placeholder="3">
      <input type="text" name="num5" class="input1" placeholder="4">
      <input type="text" name="num6" class="input1" placeholder="5">
      <input type="text" name="num7" class="input1" placeholder="6">
      <input type="text" name="num8" class="input1" placeholder="7">
      <input type="submit" value="SUBMIT">
    </form>
</html>


<?php 
if (!empty($_POST)) {
$b = $_POST['num2'];
$c = $_POST['num3'];
$d = $_POST['num4'];
$e = $_POST['num5'];
$f = $_POST['num6'];
$g = $_POST['num7'];
$h = $_POST['num8'];
$masiv1= array();

function myFunction($b,$c,$d,$e,$f,$g,$h){
$a = $h;
$j = $b;

    $masiv1 = array($a,$b,$c,$d,$e,$f,$g,$h,$j);
        for ($i=1; $i <= 7; $i++) { 
              if ($masiv1[$i]>$masiv1[$i-1] && $masiv1[$i]>$masiv1[$i+1]) {
              echo "The Number is: $masiv1[$i]  The key is: $i ";
              break;
              }

        }  
              if ($masiv1[$i]>$masiv1[$i-1] && $masiv1[$i]>$masiv1[$i+1]) {
             }
             else{
              echo "no such element";
              }

}

myFunction($b,$c,$d,$e,$f,$g,$h);


}
?>