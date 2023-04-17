<?php
// Example usage
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function sum_even_numbers($numbers) {
    // Use array_filter to extract only the even numbers
    $even_numbers = array_filter($numbers, function($num) {
        return $num % 2 == 0;
    });
    
    // Use array_sum to add up the even numbers
    return array_sum($even_numbers);
}
echo "sum even numbers :" .sum_even_numbers($numbers);
?>