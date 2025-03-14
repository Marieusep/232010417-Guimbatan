// Exercise 1: Variables and Operators
<?php
$a = 15;
$b = 7;

echo "Sum: " . ($a + $b) . "\n";
echo "Difference: " . ($a - $b) . "\n";
echo "Product: " . ($a * $b) . "\n";
echo "Quotient: " . ($a / $b) . "\n";
?>

// Exercise 2: Conditional Statements
<?php
$number = 8;

if ($number % 2 == 0) {
    echo "The number $number is even.\n";
} else {
    echo "The number $number is odd.\n";
}

if ($number > 0) {
    echo "The number $number is positive.\n";
} elseif ($number < 0) {
    echo "The number $number is negative.\n";
} else {
    echo "The number $number is zero.\n";
}
?>


// Exercise 3: Loops
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

$fib1 = 0;
$fib2 = 1;
echo "First 10 Fibonacci even numbers:\n";
for ($i = 0; $i < 10; $i++) {
    $fib = $fib1 + $fib2;
    if ($fib % 2 == 0) {
        echo $fib . "\n";
    }
    $fib1 = $fib2;
    $fib2 = $fib;
}
?>

//Exercise 4: Functions
<?php
function greet($name) {
    return "Hello, $name!";
}
echo greet("John") . "\n";

function square($number) {
    return $number * $number;
}
echo "The square of 4 is " . square(4) . "\n";
?>

// Exercise 5: Form Handling
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="text">Enter some text:</label>
        <input type="text" id="text" name="text">
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submittedText = $_POST['text'];
    echo "You submitted: " . htmlspecialchars($submittedText);
}
?>
