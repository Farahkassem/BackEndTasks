<?php echo'we love PHP';
 echo'<br>';
 print 'we love PHP';
 print 'br';
 echo 'test';// single line comment
 echo "test" ;# singlr line comment
 /*line 1
 line2
 */
echo "test" /*single line*/;
  echo gettype(true);
  echo'br';
  echo gettype(100);
  echo'br';
  echo gettype(70.30);
  echo'br';
  echo'br';
  echo gettype('Farah');
  echo'br';
  echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Aribia"));
  echo'br';
  echo gettype(["Egypt" ,"saudi Aribia"]);
  echo'br';
  echo'br';
  echo'br';
   echo 1+'2';//3
   echo '<br>';
   echo gettype(1+'2');//integer
   echo '<br>';
   echo true;//1
   echo '<br>';
   echo gettype(true);//boolean
   echo '<br>';
   echo gettype(true+true);//2
   echo '<br>';
   echo 5+'5 lesson';//10 warning
   echo '<br>';
   echo gettype(5+'5 lesson');//integer warning
   echo '<br>';
   echo 10 + 15.5;//25.5
   echo '<br>';
   echo gettype(10 + 15.5);
   echo '<br>';
   echo '<br>';
echo 5+(int)'5 lesson';
echo '<br>';
echo gettype(5+(int)'5 lesson');
echo '<br>';
echo 10+(int)15.5;
echo '<br>';
echo gettype(10.5+10.5);
echo '<br>';
echo gettype((int)10.5+(int)10.5);
echo '<br>';
echo (int)10.5+(int)10.5;//20
echo '<br>';
echo (int)(10.5+10.5);//21
var_dump((bool)"");
echo '<br>';
var_dump((bool)array());
echo '<br>';
echo '<br>';
var_dump((bool)[]);
echo '<br>';
var_dump((bool)0);
echo '<br>';
var_dump((bool)"Farah");
echo '<br>';
var_dump((bool)array(1));
echo '<br>';
var_dump((bool)[1]);
echo '<br>';
var_dump((bool)100);
echo '<br>';
var_dump((bool)-100);
echo '<br>';
var_dump((bool)10.5);
echo '<br>';
echo 'hello php';
echo '<br>';
echo "Hello 'php'";
echo '<br>';
echo 'hello\'php\'';
echo '<br>';
echo 'Hello PHP
on  Multi 
lines';
echo '<br>';
echo nl2br('Hello PHP
on  Multi 
lines');// new lines
echo '<br>';
$name = "farah";
echo '<br>';
echo '<br>';
echo <<<"here"
heloo PHP
spicial characters $$ ''' "" " \\\\
hello my name is $name
here;
echo '<br>';
echo <<< 'now'
heloo PHP
spicial characters $$ ''' "" " \\\\
hello my name is $name
now ;
echo '<br>';

echo '<ul>';
echo '<li>' ,$name, '</li>';  
echo '<li>' ,$name ,'</li>';
echo '<li>', $name, '</li>';
echo '<li>' ,$name ,'</li>';
echo '</ul>';
echo '<br>';
echo <<<"navlinks"
<ul>
<li>$name</li>
<li>$name</li>
<li>$name</li>
<li>$name</li>
</ul>
navlinks;
echo '<br>';
echo '<br>';
echo '<pre>';
print_r([
    0=> 'sameh',
    "A"=>"Ahmed",
    "B"=>"bassam",
    "mahmoud",
    true => "sayed",
    "1"=> "osama",
    "gamal",
    9=>"amira",
    "eman",
    "mohamed",
    false =>"asmaa",
    8=>"haytham",
    "samer",
    "names"=>["osama","ahmed","sayed"=>["1","2","3"]]


]);
echo '</pre>';
echo '<br>';
$username = "farah";//declar a var
echo $username;
echo '<br>';
echo 'heloo $username';
echo '<br>';
echo "helo $username";
echo '<br>';
$a = "osama";
$$a = "Farah";
$$$a = "school";

echo $a ;
echo '<br>';
 echo $$a;
echo '<br>';
echo $osama;
echo '<br>';
echo $$$a;
echo '<br>';
echo $Farah;
echo '<br>';
echo "hello $$a";
echo '<br>';
echo "hello ${$a}";//$$a
echo '<br>';
$a = "osama";
$b = &$a;
$b = "Farah";
$a = "school";
echo $a;
echo '<br>';
echo $b;
echo '<br>';
  // echo '<pre>';
 // print_r($_server);
  //echo $_server["HTTP_CONNECTION"];
  //echo'</pre>';

  echo $_POST["username"];
echo '<br>';

 ?>
 <form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="send">
 </form>
 <?php
define("DB_NAME","FARAH");
define("MAIN_NUMBER",5);
echo DB_NAME;
echo MAIN_NUMBER * 50;
echo '<br>';
define("clonee","AA");

echo php_uname();
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __dir__;
echo '<br>';
echo clonee;

//no problem here
function hello(){
return "hello";
}
echo hello();

//reserved word,syntax error
//function clone(){
  //  return "clone";}
//echo clone();
echo '<br>';
echo 10 + 20;
echo '<br>';
echo gettype(10 + 20);
echo '<br>';
echo 9.5 + 19.5;
echo '<br>';
echo gettype(9.5 + 19.5);
echo '<br>';
echo 10 - 20;
echo '<br>';
echo gettype(10 - 20);
echo '<br>';
echo 9.5 - 19.5;
echo '<br>';
echo gettype(9.5 - 19.5);
echo '<br>';
echo 10 * 20;
echo '<br>';
echo gettype(10 * 20);
echo '<br>';
echo 9.5 * 19.5;
echo '<br>';
echo gettype(9.5 * 19.5);
echo '<br>';
echo 20 / 10;
echo '<br>';
echo gettype(20 / 10);
echo '<br>';
echo 21 % 10;// remove 1 to became 20
echo '<br>';
echo 23 % 10;// remove 3 to became 20
echo '<br>';
echo 30 % 10;
echo '<br>';
2 ** 4; 
echo '<br>';
echo "100";
echo '<br>';
echo gettype("100");
echo '<br>';
echo +"100";
echo '<br>';
echo gettype(+"100");
echo '<br>';
echo -"100";
echo '<br>';
echo gettype(-"100");
echo '<br>';
$a = 10;
$a += 20;
echo $a;
echo '<br>';
// test equal 
var_dump(100 == 100);
echo '<br>';
var_dump(100.0 == 100);
echo '<br>';
var_dump(100 == "100");
echo '<br>';
echo '#############';
echo '<br>';
//test identical 
var_dump(100 === 100);
echo '<br>';
var_dump(100 === "100");
echo '<br>';
var_dump(100.0 === 100);
echo '<br>';
var_dump(100.0 !== "100");
echo '<br>';
var_dump(100 > 50);
echo '<br>';
var_dump(100 >= 50);
echo '<br>';
var_dump(100 <=> 200);//-1
echo '<br>';
var_dump(100 <=> 50);//1
echo '<br>';
var_dump(100 <=> 100);//0
echo '<br>';
$likes =0;
$likes++;
$likes++;
$likes--;
echo '<br>';
$a=0;
echo $a++;//0
echo '<br>';
echo $a;//1
echo '<br>';
$b=0;
echo ++$b;//1
echo '<br>';
echo $b;//1
// same as declrement

echo '<br>';
var_dump(100 > 50 and 100 > 80 and 100 > 90);//true
echo '<br>';
var_dump(100 > 50 && 100 > 80 && 100 > 100);//false
echo '<br>';
var_dump(100 > 50 or 100 > 80 or 100 > 90);//true
echo '<br>';
echo '<br>';
var_dump(100 > 50 xor 100 > 110 );// false (one of them is true)
 ?>