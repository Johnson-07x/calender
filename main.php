<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

// Call the C program with the input parameters
$result = exec("your_c_program $num1 $num2");

echo "Result: $result";
?>

