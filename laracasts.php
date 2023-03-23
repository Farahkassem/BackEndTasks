<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     
    <title>Document</title>
</head>
<body>
    <?php $name = "Dark hatter";
    $read = true ;
    if ($read){
        $message ="you have read $name";
    } else {
        $message = "you hsvr not read $name";
    }
    ?>
    <h1>
        you have read "<?php echo $name;?>."
        <?= $message ?>;
        <?php 
        $greeting = "hello";
        echo "$greeting everyone!";

        echo '<br>';
        ?>
    <h1>recommended books</h1>
    <?php $books = ["do androide dream" ,
    "hail hary"
    ];
    ?>
        <ul>
            <?php foreach ($books as $book){
                echo "<li><div>$book</div></li>";
            } ?>
        </ul>
        <!---vid 7 no new to write it ----> 
        <!----vid  8--->
        

    </h1>
    function filterby.....();
    <!---vid 9 and 10 ---> 
    function filter (,)//two variables
    $filtered ...array_filter($a,function($b));
</body>
</html>