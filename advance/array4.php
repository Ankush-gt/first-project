<?php
function reverse_strings($strings): array {
    return array_map('strrev', $strings);
}

// Example usage:

$strings = ["apple", "banana", "cherry"];
$reversed = reverse_strings($strings);
print_r($reversed);
?>