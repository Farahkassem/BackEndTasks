<?php
define ("farah","1");
$a = "farah";
$b = "web";
$c = "school";
echo $a ."". $b . "" . $c;
echo '<br>';
echo "{$a} {$b} {$c}". farah;
echo '<br>';
$x = "farah";
$x .="web"; //$x = $x . "web"=>farah web
$x .= "school";// $x = $x => "school" farah web school
echo $x;
echo '<br>';
$arr1 = [1=> "A",2 =>"B"];
$arr2 = [3 => "C" , 4 =>"D"];
$arr3 = $arr1 + $arr2 ;
echo "<pre>";
print_r($arr1 + $arr2);
print_r($arr3);
echo "</pre>";
$arr4 = [1 =>"10", 2 => "20"];
$arr5 = [2 => 20, 1 => 10];

 var_dump($arr4 != $arr5);
echo '<br>';
var_dump($arr4<>$arr5);
echo '<br>';
var_dump($arr4 == $arr5);
echo '<br>';
$arr6 = [1=> 100, 2=>200];
$arr7 = [1=> 100, 2=>200];
var_dump($arr6===$arr7); //same order , same type 
echo '<br>';
$a = 10;
$b =@$a or die("variable not found ");

echo "test $b";
echo '<br>';
//file
$f = file("farah.text");
echo "<pre>";
print_r($f);
echo "</pre>";
echo '<br>';
//include
(include("farah_kassem.php"))or die ("fine not found");
echo '<br>';
echo 2+4*5;//22
echo '<br>';
echo (2+4)*5;//30
echo '<br>';
echo 10||false||0||[]||"";//true=>1
echo '<br>';
echo true;//1
echo '<br>';
var_dump(10||false || 0 ||[] || "");//true
echo '<br>';
$a = 10 || false ;
echo $a;//1
echo '<br>';
$b = 10 or false ;
echo $b ;//10
echo '<br>';
 if (10>5){
    echo "first condition";
 }elseif(6>10){
    echo "second condition";
 }else {
    echo "no";
 }
echo '<br>';
$page="about";
if ($page == "about"){
    echo"this is the page";
}
echo '<br>';
$tite = "";
if ($tite ==''){
    echo "unknown page";
}else {
    echo $tite;
}
echo '<br>';
$name = "osama";
$is_studend = true ;
$is_orphan= false;
$country="egypt";
$country_discound=50;
$price=100;
$student_discound=10;
$orphan_discound=15;
if($country=="egypt");{
    if($is_studend==true)

    if($is_orphan==true){
        echo "";
    }else{
        echo "hello $name ";
    echo "<br>";
    echo "country discound $country_discound";
    echo "<br>";
    echo "student discound $student_discound";
    echo "<br>";
    echo "the final price is " ,  $price-$country_discound-$student_discound;
    } 

}
{
        echo "hello $name ";
    echo "<br>";
    echo "country discound $country_discound";
    echo "<br>";
    echo "the final price is " ,  $price-$country_discound;
    }
{
    echo "hello $name ";
    echo "<br>";
    echo "no discound";
    echo "<br>";
    echo "the final price is $price" ;

    }    echo '<br>';
    // include ... require
    include_once("test.php");//$a=10
    echo $a . '<br>';
    $a = 20;
    include_once "test.php";//$a=20
    echo $a . "<br>";
    echo "continue";

echo '<br>';
//function,,DRY
function say_hello_to($someone){
    echo "hello $someone<br>";
}
say_hello_to("osama");
say_hello_to("ahmed");
say_hello_to("sayed");
echo '<br>';
function say_hello($one , $two){
    echo "hello $one $two <br>";
}
say_hello("osama","ahmed");

function deep_freezer($item){
    if ($item === "water"){
echo "make ice <br>";
    }elseif($item === "coca cola"){
        echo "make it cold <br>";
    }elseif($item === 'fruits'){
echo "make it fresh <br>";
    } else {
        echo "unkown item";
    }
}
deep_freezer("water");
deep_freezer("coca cola");
deep_freezer("fruits");
deep_freezer("remote");
deep_freezer("phone");
echo '<br>';
$prizes = ["pc","playstation","XBOX","apple TV","laptop","ipad","iphone"];
function get_number ($num_one , $num_two){
    return $num_one + $num_two;// not take any acton after return
}
//get_number(2,1);//3
//echo $prizes[3]//apple TV
//$prizes_number = get_number(2,1);
//var_dump($prizes_number);
//echo $prizes[];//null
echo $prizes [get_number(2,1)];
echo '<br>';
//default parameter(fun)
function get_data($country="private country",$name="private",$age="private",$address = "private adress"){
    $line_one = "your country is $country and your name is $name <br>";
    $line_two = "your age is $age and you live is $address <br>";
    return $line_one . $line_two;
}
//echo get_data("egypt","osama",39);
echo get_data(address:"cairo");
echo '<br>';
// variable arguments .../ spread syntax
//function calculate(...$nums){
    //return $num1 + $num2 + $num3;
    //echo "number of arguments". func_num_args()."<br>";
   //echo "number index number 3 is ". func_num_args()."<br>";
   //print_r(func_get_args());
   //$result = 0;
   //foreach (func_get_args()as $arg);
   //$result +=$arg;
        //echo $result;
        echo "arguments index number 3 is ". $nums[3] . "<br>";
print_r($nums);
$result=0;
foreach ($nums as $num);
$result += $num;
echo $result;
//}
calculate(10, 20, 50, 30, 40);
echo '<br>';
 //variable function
  function one(){
    return "one from function";
  }//echo one();
  $fun1 = "one";
  echo '<br>';
  function say_helloo_to($someone){
    return "helloo $someone";
  }
  $func2 = "say_halloo_to";
  echo $func2("osama");
echo '<br>';
//function exists
function testing(){
    return "testing from function";
}
if (function_exists("testing")) {
    echo testing();
}else{
echo "function not found";
}
echo '<br>';
//echo strlen(("elzero"));//6
$func3="strlen";
echo $func3("elzero");
echo '<br>';
//passing
function calculate($n1, $n2) :int{
    return $n1 + $n2;
}echo calculate(10.5 , 9.5);
echo '<br>';
echo gettype(calculate(10.5,9.5));//integer
echo '<br>';
//anon function
$msg = "hi";
$say_hi= function($someone) use($msg){
    return "hi $someone";
};
echo $say_hi("osama");
echo '<br>';
$nums = [10,20,30,40,50];
function add_five($item){
    return $item + 5;
}
$nums_after_adding_five = array_map("add_five",$nums);
echo'<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

echo '<br>';


$nums_after_adding_ten = array_map(function($item){return $item +10;},$nums);//anon func
echo'<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';



echo '<br>';
//arrow fun..
$say_hola = fn($someone)=>"hola $someone";
echo '<br>';




//string
$str = "elzero";
echo "first letter is $str[0]<br>";
echo "4th letter is $str[3]<br>";
echo "number of letters " . strlen($str) . "<br>";
echo "last letter is $str[-1]<br>";
echo "last letter is {$str [strlen ($str) - 1]}<br>";

echo $str . "<br>";
$str[0]= "a";//alzero


echo '<br>';

echo lcfirst("Elzero Web School") ."<br>"; //just lower first letter
echo ucfirst("elzero Web School") . "<br>";// just up firt letter
echo strtolower("elzero Web School") . "<br>";// lower all 
echo strtoupper("elzero web school") . "<br>";// upper all

echo '<br>';
echo ucwords("elzero web school"). "<br>";// upper the first letter of every words
echo str_repeat("elzero",3);//repeat

echo '<br>';
// string function
$frinds = ["ahmed" , "osama", "ali", "salem"];
echo implode("",$frinds) . "<br>";
echo implode(",",$frinds)."<br>";
echo implode("@@",$frinds) . "<br>";
echo implode($frinds) . "<br>";
$str = "elzero web school is cool ";


echo "<pre>";
print_r(explode(".", $str));
echo "</pre>";

echo "<pre>";
print_r(explode("I", $str));
echo "</pre>";


echo "<pre>";
print_r(explode(".", $str , 0));//0=> one elemint 
echo "</pre>";

echo str_shuffle("elzero")."<br>";
echo strrev("elzero")."<br>";

echo "...elzero.."."<br>";
echo trim("...elzero..")."<br>";

echo trim("#elzero###",'#')."<br>";
 

echo '<br>';

echo chunk_split("elzero web school",3,"@");
echo '<br>';


echo '<pre>';
print_r(str_split("elzero"));
echo '</pre>';

echo '<pre>';
print_r(str_split("elzero",2));
echo '</pre>';

echo '<br>';

echo strip_tags("<h3>hello <b>elzero</b></h3>");
echo '<br>';

echo strip_tags("<h3>hello <b>elzero</b></h3>");
echo '<br>';
echo nl2br("elzero\nweb\nschool",true);


echo '<br>';

var_dump(strpos("hello hello","h"));//index0
echo '<br>';
var_dump(strpos("hello hello","h",3));//index6
echo '<br>';
var_dump(strpos("hello hello","h",6));//index 6
echo '<br>';
var_dump(strpos("hello hello","H"));//false not found its senstive
echo '<br>';
var_dump(strpos("hello hello","h,-2"));//false
echo '<br>';
var_dump(strpos("hello hello","h",-5));//false
echo '<br>';

var_dump(strpos("hello hello","h",-11));//h

echo '<br>';
var_dump(strrpos("hello hello","h"));//6

echo '<br>';
var_dump(strrpos("hello hello","h",5));//6
echo '<br>';
var_dump(stripos("hello hello","H"));//insensitive
echo '<br>';
var_dump(substr_count("hello hello","he"));//2
echo '<br>';
var_dump(substr_count("hello hello","he",1));//1

echo '<br>';
var_dump(substr_count("hello hello","he",1,6));//0

echo '<br>';
var_dump(substr_count("abcdabcda","abcda",1));//1

echo '<br>';

parse_str("name=osama&email=o@nn.sa&os=mac",$query);
echo"<pre>";
print_r($query);
echo "</pre>";
echo $query["name"]."<br>";
echo $query["email"]."<br>";
echo $query["os"]."<br>";
echo "hello [] () * + <br>";
echo quotemeta("hello [] () * + . <br>");


echo str_pad("12",8,0,STR_PAD_BOTH) . "<br>";
echo str_pad("321",8,0,STR_PAD_LEFT) . "<br>";
echo str_pad("1313",8,0) . "<br>";
echo str_pad("15435",8,0) . "<br>";
echo str_pad("500432",8,0) . "<br>";

echo strtr("elzero web schoo@","@","1");

echo '<br>';
$translation=['@'=>"1","#"=>"o"];

echo strtr("elzer# web sch##@",$translation);
echo '<br>';

echo str_replace("@","o","elzer@ web sch@@l",$r);//elzero web school

echo '<br>';
echo "replace count is $r";//3
echo '<br>';
echo str_replace(["#","@"],"a","elzer@ web sch@@l",$r);//elzero web school


echo '<br>';


echo substr_replace("onetwo",1,0);//1
echo '<br>';
echo substr_replace("onetwo",1,3);//one1

echo '<br>';
echo substr_replace("onetwo",1,-1);//onetw1

echo '<br>';
echo substr_replace("onetwo",2,2);//on2

echo '<br>';
echo substr_replace("onetwo",2,2,2);//on2wo

echo '<br>';
echo substr_replace("onetwo",2,1,4);//o2o

echo '<br>';
echo substr_replace("elzero_web_school","a",7,3);//elzero_a_school

echo '<br>';
echo substr_replace("elzero_web_school","a",7,-1);

echo '<br>';
echo "<pre>";
print_r(substr_replace(["onetwo","threefour"],1,0));
echo "</pre>";

echo '<br>';

echo '<br>';

$str = "welcom to to elzero web school website";
echo strlen($str)."<br>";
echo wordwrap($atr , 8 , "<br>",true);//true=> cut lon words

echo '<br>';

echo ord("a");//97  

echo '<br>';

echo chr(97);//a


echo '<br>';

echo similar_text("elz@ero", "elz_eroo");

echo '<br>';

echo similar_text("elzero", "elzero",$perc);//100

echo '<br>';

echo $perc;

echo '<br>';

echo strtr("elzero web","w",true) . "<br>";//web
echo strtr("elzero web", "z",false)."<br>";//zero web
echo strlen(strtr("elzero web","w",true)). "<br>";//7


echo strtr("elzero web","w",false) . "<br>";
var_dump(strtr("elzero web","w",false));
echo '<br>';
echo '<br>';

echo 10_000_000;


echo '<br>';
echo number_format(10000000.156023,3);


echo '<br>';
echo number_format(10000000.156023,3,'@',"#");

echo '<br>';
//array functions
$frinds = ["osama","ahmed","sameh","mahmoud","gamal"];

//echo "<pre>"
print_r(array_chunk($frinds,2,true));
echo '</pre>';

$contries=["eg"=>'egypt',"ksa"=>"saudi arabia","sy"=>"syria","usa"=>"united state"];
//echo "<pre>"
print_r(array_chunk($countries,2,true));
echo '</pre>';


echo '<br>';

$counting = ["b","a","a","b","b","b","c"];
//echo "<pre>"
print_r(array_count_values($countries,2,true));
echo '</pre>';

echo '<br>';

$family = ["osama","ahmed","sameh","mahmoud","gamal",["eman","noha"]];
echo '<br>';

print_r($family);
print_r(array_reverse($family,true));

echo '<br>';
$contries=["eg"=>'egypt',"ksa"=>"saudi arabia","sy"=>"syria","usa"=>"united state"];
echo '<br>';
print_r(array_values($countries));
echo '<br>';
print_r(array_flip($countries));
echo '<br>';


echo '<br>';

$counting = ["b","a","a","b","b","b","c"];

echo '<br>';
echo count($counting,1);
echo '<br>';

$search = ["1",2,3,4];
if (in_array("1",$search,true)){
    echo "the element is found";
}

echo '<br>';
$pad = ["a","b","c","d"];
echo '<br>';
print_r(array_pad($pad,10,"@"));//after them


echo '<br>';
print_r(array_pad($pad,-10,"@"));//brfore them
echo '<br>';

$product=[10,5,2,10];

echo array_product($product)."<br>";

$sum =[10,5,2,10];

echo array_sum($sum);
echo '<br>';
$friends = ["osama","ahmed","sameh","mahmoud","gamal","eman","noha"];

echo current($friends);//osama
echo '<br>';
echo next($friends);//ahmed
echo '<br>';
echo prev($friends);//osama
echo '<br>';
echo reset($friends);//pont on first element
echo '<br>';
echo end($friends);//last element
echo '<br>';

$merge_one = ["one"=>"php",'two'=>"css","three"=>"java script"];
$merge_two = ["one"=>'html',"four"=>"python"];
echo '<br>';
print_r(array_merge($merge_one,$merge_two));


$merge_three = [10=>"php",20=>"css",30=>"java script"];
$merge_four = [40=>"python"];
echo '<br>';


echo '<br>';

$main = ["one"=>"php",'two'=>"css","three"=>"java script"];
$replace = ["one"=>'html',"four"=>"python"];
echo '<br>';
print_r(array_replace($main,$replace));
echo '<br>';
$nums = [1,2,3,4,5];
echo array_rand($nums);
echo '<br>';
print_r(shuffle($nums));
echo '<br>';
shuffle($nums);
echo '<br>';
print_r($nums);
echo '<br>';
$chars = ["a","b","c","d"];

$frist = array_shift($chars);

echo "$first";//a

echo '<br>';

print_r($chars);

echo '<br>';
$last = array_pop($chars);

echo "$last";//d

echo '<br>';

print_r($chars);


echo '<br>';

array_push($chars,"x","y","z");

echo '<br>';
array_unshift($chars,"one");//add to front
echo '<br>';

$nums = [10,20,30,40,50,60,70];

echo '<br>';
print_r(array_splice($nums,2));
print_r($nums);//[10,20]
echo '<br>';



echo '<br>';

$names =["osama","ahmed","sameh","mahmoud","gamal","eman","noha"];

sort($names);
echo '<br>';


print_r($names);
echo '<br>';

asort($names);
$codes = ["1"=>"syria","3"=>"egypt"];
ksort($codes);//by keys

krsort($codes);


echo '<br>';
echo '<br>';

//array map ...array filter

function add_title($fname){
    return "mr $fname";
}
// echo add_title("osama);
$first_name = ["osama","ahmed","sayed"];
$last_name = ["ameer",'samy',"shady"];

echo '<br>';
print_r(array_map('add_title',$first_name));
echo '<br>';

$nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
];
function check_nums($n){
    return $n > 4;
}

echo '<br>';
print_r(array_filter($nums,"check_nums"));
echo '<br>';

function add($carry,$item){
    echo "$carry <br>";
    echo "$item <br>";
    echo $carry + $item . "<br>";
    echo "########<br>";
}
$nums = [10,20,50,100,10];
echo array_reduce($nums,"add",100);
echo '<br>';
echo '<br>';
//math fun
echo abs(10);
echo '<br>';

echo abs(0);
echo '<br>';

echo abs(-10);

echo '<br>';
echo rand(50,60);
echo '<br>';

echo mt_getrandmax();

echo '<br>';
echo intdiv(11,5);//2
echo '<br>';
echo gettype(intdiv(11,5));//integer
echo '<br>';
echo fmod(11,5);
echo '<br>';
echo gettype(fmod(11,5));
echo '<br>';
echo ceil(5.99);// 6 round up to integer
echo '<br>';
echo floor(5.99);//5 round dwon to integer
echo '<br>';
echo ceil(-5.99);//-5
echo '<br>';
echo floor(-5.99);//-6

echo '<br>';

echo round(5.99);//6
echo '<br>';
echo round(5.50);//6
echo '<br>';
echo round(5.49);//5
echo '<br>';
echo round(5.10);//5
echo '<br>';
echo round(5.99,1);//6
echo '<br>';
echo round(5.99,1);//5.9
echo '<br>';
echo round(5.99,0,PHP_ROUND_HALF_UP);//6
echo '<br>';
echo round(5.50,0,PHP_ROUND_HALF_DOWN);//5

echo '<br>';
echo round(5.50,0,PHP_ROUND_HALF_EVEN);//6

echo '<br>';
echo round(5.99,0,PHP_ROUND_HALF_ODD);//5

echo '<br>';
echo round(4.50,0,PHP_ROUND_HALF_ODD);//5

echo '<br>';
echo sqrt(16);//4..4*4
echo '<br>';
echo min(10,20,-40,-30,50);//-40....max like that
echo '<br>';
echo [10,20,-40,-30,50];//-40
echo '<br>';
print_r(min([1,3,5],[1,2,6]));

//<!-- vid 36 --> 
 
switch($text){ 
case "one": 
    echo "hello"; 
    break; 
    case "two": 
        echo "bye"; 
        break; 
        default: 
        echo "no massage"; 
    } 
?> 
 
<!-- vid 37 --> 
<?php 
$num=1; 
while($num<5){ 
    echo "$num"; 
    $num++; 
} 
?> 
 
<!-- vid 38 --> 
<?php 
$num=0; 
while($num<50){ 
 
    echo "$num<br>"; 
    $num+=2; 
} 
?> 
 
<!-- vid 39 --> 
<?php 
for($num=1;$num<5;$num++){ 
    echo "$num<br>"; 
} 
?> 
 
<!-- vid 41--> 
break -> بيوقف لحد المطلوب و يقفل 
continue -> بيعدي المرحله اللي انا فيها
 
