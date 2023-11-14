<!DOCTYPE html>
<html>
<head>
        <title>my first PHP file</title>
</head>
<body>
    <h1>
        <?php echo "PHP Demo";
        ?>
    </h1>    

    <div>
    <?php

        $stringOne = "my email is ";
        $stringTwo = "mario123@thenetninja.co.uk";

        // echo $stringOne . $stringTwo;

        $name = 'mario';

        // echo 'Hey, my name is ' . $name

        // define("NAME", "Yoshi"); // Constant
        // $name = "yoshi";
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

        // pi() which is a built in function into the language. 
        // echo pi();

// indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];

// $peopleOne[1];
$peopleTwo = array('ken', 'chun0li');

// echo $peopleOne[1];
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
// echo $ages;
// print_r($ages);

$ages[] = 60;
// print_r($ages);

array_push($ages, 70);
// print_r($ages);

// echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// Associative Array as if Key Value Pairs (Dictionary)
$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
// echo $ninjasOne['mario'];

// print_r($ninjasOne);
// Array function
$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
// print_r($ninjasTwo);

// Add Value
$ninjasTwo['toad'] = 'pink';
// print_r($ninjasTwo);

// Override
$ninjasTwo['peach'] = 'pink';
// print_r($ninjasTwo);

// Give count of associative array
// echo count($ninjasOne);

// Merge Arrays
$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
// print_r($ninjasThree);

// Multi-Dimensional Arrays

$blogs = [
    ['mario party', 'mario', 'lorem', 30],
    ['mario kart cheats', 'toad', 'lorem', 25],
    ['zelda hidden chests', 'link', 'lorem', 50]
];

print_r($blogs[2][3]);

?>
    </div>
</body>
</html>