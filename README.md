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
