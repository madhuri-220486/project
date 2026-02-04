<!-- PHP datatypes and variable scope: -->
<!-- STRINGS -->
<?php
$name = "Madhuri";
echo gettype($name); // string
echo "\n";  
// INTEGERS
$age = 25;
echo gettype($age); // integer
echo "\n";
// FLOATS
$height = 5.6;
echo gettype($height); // double
echo "\n";
// BOOLEANS
$is_student = true;
echo gettype($is_student); // boolean
echo "\n"."<br>";
// arrays
$a1 = array("india","chaina","russia");
echo gettype($a1); // array
$a2=array(array(1,2,3),array(4,5,6),array(7,8,9),array(9,10,11));
print_r($a1);
print_r($a2);
echo "\n"."<br>";
$age=12;
function ageCheck($age){
    if($age>18){
        echo "you are eligible for job";
    }
    else{
        $age1=19; // this ia local variable this else block we cannot access outside 
        echo "wait ntil you finsh ".$age1." years";
    }
    echo "\n"."<br>";
    // echo "minimum age is $age1"; // error because age1 is local variable
    
}
function globalVar(){
    echo "we are in the function globalVar<br>";
    //we can access global variable variables outside of this block by using global keyword
    global $age;
    echo "age i given outside of this function is $age"."<br>";
    echo "globalVar function ended<br>";
}
function staticVar(){
    static $flag=1;
    echo ""."<br>";
    echo "staticVar function opened"."<br>";
    echo "number of times this function called is $flag";
    $flag++;
    echo "<br>"."staticVar function ended";
    echo ""."<br>";
}
globalVar();
ageCheck($age);
staticVar();
staticVar();
staticVar();
staticVar();
?>