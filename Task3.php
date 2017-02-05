<html>
<form method="post" action="">
  <input type="text" name="num" placeholder="type a number" >
  <input type="text" name="array">
  <input type="submit" value="submit" name="submit">
</form>

</html>
<?php
$input = $_POST['array'];
$num = $_POST['num'];
$input1 = explode(",", $input);

function calc($input1 , $num) {
if (!empty($_POST)) {

if (in_array($num, $input1)) {
    $input1= (array_count_values($input1));
    echo "The number $num is repeated $input1[$num]";
    echo"<pre>" .print_r($input1,true)."<pre>";

  }
else{
    echo "This is not in Arrray";
}
}
}

calc($input1 ,$num);
?>