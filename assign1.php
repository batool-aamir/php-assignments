<?php
$marks = array( 
          "Ali" => array( 
                       "English" => 95, 
                        "Maths" => 85, 
                        "Science" => 74, 
                        ), 
          "Abbas" => array( 
                        "English" => 78, 
                        "Maths" => 98, 
                        "Science" => 46, 
                        ), 
           "Aamir" => array(     
                        "English" => 88, 
                        "Maths" => 46, 
                        "Science" => 99, 
                        ), 
                ); 
//print_r($marks)//

$keys=array_keys($marks);
for($i=0; $i<count($keys);$i++)
{
    $marks_keys=array_keys($marks[$keys[$i]]);
    for ($j=0; $j<count($marks_keys); $j++)
    {
        echo ($keys[$i].' '.$marks_keys[$j].' '.$marks[$keys[$i]][$marks_keys[$j]]." ");
    }
    echo "<br/>";
}

?>
