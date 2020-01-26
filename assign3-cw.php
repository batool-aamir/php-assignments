<?php
    $students=array(
        array("name"=> "Ali",
              "marks" => "89"),
        array("name"=> "Abbas",
            "marks" => "90"),
        array("name"=> "Aamir",
            "marks" => "91"),
            
    );
$html="<table border>";
$html.="<thead><tr>";
$html.="<th>STUDENTS NAME</th>";
$html.="<th>STUDENTS MARKS</th>";
$html.="</tr><thead><tbody><tr>";

foreach($students as $key => $value){
$html.="<td>".$value["name"] ."</td>";
$html.="<td>".$value["marks"] ."</td>"; 
 $html.="</tr>"  ;  
}
$html.="</tbody></table>";

echo $html;



?>