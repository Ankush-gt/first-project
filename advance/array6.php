
<?php 
function toTitleCase($strings) {
    return array_map(function($str) {
      return ucwords($str);}, $strings);
  }
  
  $strings = ["the quick brown fox", "jumped over", "the lazy dog"];
  $result = toTitleCase($strings);
  $output = json_encode($result);
  echo $output;
?>