<form method="POST">
<label>Enter any number and we will give you its multiple</label><br/>
<input type="text" name="number"><br/>
<input type="submit" value="submit"><br/>
</form>

<?php
                                        //Method 1//
                                        //Using For Loop//

 /*                                       
if(isset($_POST['number'])){
$number=$_POST['number'];

for ($x = 1; $x <= 10; $x++) {
    $newnum=$number * $x ;
echo $number." x ".$x ."=". $newnum. "<br/>";
    
}
}*/
                                                 

                                        //Method 2//
                                    //Using While Loop//

if(isset($_POST['number'])){
    $number=$_POST['number'];
    $i=1 ;
while($i <= 10)
{
    $newnum=$number * $i ;
echo $number." * ".$i ." = ". $newnum. "<br/>";
$i++;
}
}
?>
