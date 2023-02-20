
<?php
echo "problem1";
//Problem1
echo PHP_EOL;

$array = ['aa', 'bb', 'c', 'ccc', 'a', 'ertre'];

usort($array, function($a, $b){
    return strlen($a) <=> strlen($b);
});
print_r($array);






echo "problem2";
//problem2;
echo PHP_EOL;

$x = 'Habi';
$y = 'jabi';
concate($x, $y);
function concate($x, $y){
$c = $y.$x;
echo " $c \n";
}
echo PHP_EOL;
echo PHP_EOL;




echo "problem3";
//problem3
echo PHP_EOL;
$first = array("rabbil", "hasin", "faisal", "mridul", "showrav");

$finalArray = array_slice($first, 1, -1);
print_r($finalArray);

echo PHP_EOL;






echo "problem4";
//problem 4
echo PHP_EOL;
$name= "trisha ";
check($name);
function check($name){if (ctype_alpha(str_replace(' ', '', $name)) === false) {
  $errors[] = 'string does not contain only letter and white space';
  print_r($errors);
}
else 
{
    echo "string contain only letter and white space";
}
}
echo PHP_EOL;
echo PHP_EOL;


echo "problem 5";
//problem5
echo PHP_EOL;
function secondHighest(array $arr) {
    sort($arr);
    echo "second highest number: ";
    echo $arr[sizeof($arr)-2];
    }
    secondHighest(array( 1, 3, 5 , 7, 50, 100));
?>
