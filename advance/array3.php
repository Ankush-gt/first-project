<?php
$parent = '
[{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"44.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Edufficient","lead_payIn":"40.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Ronin Revenue","lead_payIn":"30.00"},{"vendor_name":"Higher Level Education","lead_payIn":"25.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"},{"vendor_name":"QMP","lead_payIn":"80.00"}]';

$array = json_decode($parent, TRUE);
// echo "<pre>";print_r($array);echo "</pre>";
// $totals = array();
// foreach ($array as $item) {
//      $vendor_name = $item['vendor_name'];
//      $lead_payIn = $item['lead_payIn']   ;
// if (array_key_exists($vendor_name, $totals)) {
//     $totals[$vendor_name] += $lead_payIn; 
// } else {
//     $totals[$vendor_name] = $lead_payIn ;
// }
// }

// print_r($totals) ."<br>"; 


$revenue = [];
foreach ($array  as $transaction) {
    $partner = $transaction['vendor_name'];
    $lead_payIn = floatval($transaction['lead_payIn']);
    if (isset($revenue[$partner])) {
        $revenue[$partner] += $lead_payIn;
    } else {
        $revenue[$partner] = $lead_payIn;
    }
}
echo "<table><tr><th>Partner Name</th><th>Total PayIn Revenue</th></tr>";
foreach ($revenue as $partner => $lead_payIn) {
    echo "<tr><td>$partner</td><td>$lead_payIn</td></tr>";
}
echo "</table>";
?>
<style>
    table,
    th,
    td {
        border: 1px solid black;
  border-collapse: collapse;
    }
</style>


