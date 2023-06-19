# BackEndTasks_Tasl1
!DOCTYPE html>
<html>
<body>

<?php
function unique($arr){
$uni_elements = array();
foreach ($arr as $elements){
if (!in_array($elements, $uni_elements)){
$uni_elements[] = $elements;
}
}
return $uni_elements;
}

$this_array = array(1,2,2,5,4,5,1,4);
$final_array= unique($this_array);
print_r($final_array);
?> 
  
  </body>
</html>

----TASK 2 -----
  <!DOCTYPE html>
<html>
<body>

<?php
function search($array , $element){
foreach($array as $value) {
if ($value === $element){
return true ;
}
}
return false ;
}
 
 $the_array = [1,3,5,8,2];
 $the_element = 5;
 if (search($the_array,$the_element)){
 echo " element is in array ";
 }
 else {
 echo "elemnt is not in array";
 }
?> 

</body>
</html>

  
