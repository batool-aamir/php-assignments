

                            /*METHOD 2*/

<form method="POST">
<label>Name</label>
<input type="text" name="name"><br/>
<label>Enter desired number between 1-100,000</label>
<input type="number" name="number">
<input type="submit" value="Send">
</form>


<?php

if(isset($_POST['number'])){
    $num = $_POST['number'];
}

$num_arr = array(
  "1" => "one",
  "2" => "two",
  "3" => "three",
  "4" => "four",
  "5" => "five",
  "6" => "six",
  "7" => "seven",
  "8" => "eight",
  "9" => "nine",
  "10" => "ten",
  "11" => "eleven",
  "12" => "twelve",
  "13" => "thirteen",
  "14" => "fourteen",
  "15" => "fifteen",
  "16" => "sixteen",
  "17" => "seventeen",
  "18" => "eighteen",
  "19" => "nineteen",
  "20" => "twenty",
  "30" => "thirty",
  "40" => "forty",
  "50" => "fifty",
  "60" => "sixty",
  "70" => "seventy",
  "80" => "eighty",
  "90" => "ninety",
  "100" => "one hundred",
  "1000" =>"one thousand",
  "100000" =>"one lac"
);

if(isset($_POST['number']))
{
  $num = $_POST['number'];
  echo "<p align='center' style='color:blue'>".\toWords($num)."</p>";
}

function toWords($n) 
{
    global $num_arr;
  foreach ($num_arr as $key => $b) 
  {
    if($n == $key)
    return $b;
  }
  if ($n > 20 && $n < 100) 
  {
    return toWords(floor($n / 10) * 10) . ' ' . toWords($n % 10);
  }
  if ($n > 100 && $n < 1000)  
  {
    return toWords(floor($n / 100)) . ' hundred and ' . toWords($n % 100);
  }
  if ($n > 1000 && $n < 100000) 
  {
    return toWords(floor($n / 1000)) .' thousand ' . toWords($n % 1000);
  }
  return $n;
}

?>