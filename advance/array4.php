<?php
function reverse_strings($strings)
{
    return array_map('strrev', $strings);
}

// Example usage:

// $strings = ["apple", "banana", "cherry"];
// $reversed = reverse_strings($strings);
// print_r($reversed);
$strings = ["apple", "banana", "cherry"];
$reversed_strings = reverse_strings($strings);

echo'["' . implode('", "', $reversed_strings) . '"]';
?>