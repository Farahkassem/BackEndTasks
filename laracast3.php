<!-- vid 21 to 31 -->
<?php
$var1=require("");
$var2 = new Database ($var1['database']);
$var3 ='note';
$var4=$var2 -> ('select *from notes where id =: id' ,['id'-> $_GET['id']])->fetch();
require "";
?>
function fetch() -> idon'y want to call it
function find() -> own this method

<form action="" method="">
<textarea name=""></textarea>
</form>
<button type ="" class=""></button>

<?php
class validator
{
public function string ($value ,$min=1,$max=INF)
{
    $value =trim($value);
    return strlen($value)>= $min && strlen($value)<= $max;
}
}
?>


