<?php
// $array = array(
//     1 => "a",
//     "01" => "b",
//     1.5 => "c",
//     true => "d",
// );
// var_dump($array);

$name = ['Nafiu', 'Siam'];
$age = 27;
$coding_score = 0.1;
$undergraduate = 'CSE';
$post_graduate = "Msc.";

// using printf
// printf("Hi my 1st name is %s and nick name is %s.\nMy Age is %d years old.", $name[0], $name[1], $age);

// using echo with if statement
if ($undergraduate == true || $post_graduate == false) {
    echo "Hi! My name is " . $name[0] . " and my nick name is " . $name[1] . ". \nMy age is " . $age . " years old.\nAnd I have completed my " . $undergraduate . " but not completed " . $post_graduate . "\n";
}
// using var_dump()
// echo "Dumping the variables for understanding:\n";
// var_dump($name);
// var_dump($age);
// var_dump($coding_score);
// var_dump($undergraduate);
// var_dump($post_graduate);