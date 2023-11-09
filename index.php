<?php

    $stringOne = "my email is ";
    $stringTwo = "mario123@thenetninja.co.uk";

    // echo $stringOne . $stringTwo;

    $name = 'mario';

    // echo 'Hey, my name is ' . $name

    // define("NAME", "Yoshi"); // Constant
    // // $name = "yoshi";
    // $age = 30;

    $name = "mario";

    // echo "Hey my name is $name"
    // echo "The ninja screamed \"Whaaa\"";
    // echo 'the ninja screamed "Whaaa"';
    
    // echo $name[0];

    //echo strlen($name)
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo str_replace('m', 'w', $name);

    //Numbers

    $radius = 25;   //integer
     $pi = 3.14;     //float

    // echo $pi * $radius**2;

    //Order of Operations ( B I D M A S )
    //Brackets - Indices - Division - Multiplication - Addition - Substraction
    //
    // echo 2 * ( 4 + 9) / 3 ;

    // echo $radius++;
    // echo $radius;

    // $age = 20;
    // $age += 10;

    // echo $age;

    //Number Functions

    // echo floor($pi);
    // echo ceil($pi);

    // // pi() which is a built in function into the language. 
    // echo pi();

    // indexed arrays
    // $peopleOne = ['shaun', 'crystal', 'ryu'];

    // $peopleOne[1];
    // $peopleTwo = array('ken', 'chun0li');

    // echo $peopleOne[1];
    // echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    echo $ages;
    print_r($ages);

    $ages[] = 60;
    print_r($ages);

    array_push($ages, 70);
    print_r($ages);

    echo count($ages);
?>

<!DOCTYPE html>
<html>
<head>
        <title>my first PHP file</title>
</head>
<body>
    <h1>
        <?php echo "Hello, Ninjas";
        ?>
    </h1>    

    <div>
        <?php echo NAME; ?>
        <?php echo $age; ?>
    </div>
</body>
</html>