<?php
$str='[{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Telesolutions 2","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Yodel Voice","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"Liquid Education","lead_payIn":"44.00"},{"partner_name":"QuinStreet","lead_payIn":"44.00"},{"partner_name":"QuinStreet","lead_payIn":"40.00"},{"partner_name":"Education Source","lead_payIn":"40.00"},{"partner_name":"Liquid Education","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Telesolutions","lead_payIn":"40.00"},{"partner_name":"Silverback","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"SilverTap LLC","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"Telesolutions","lead_payIn":"30.00"},{"partner_name":"SilverTap LLC","lead_payIn":"30.00"},{"partner_name":"QuinStreet Web","lead_payIn":"25.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},
{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"},{"partner_name":"Telesolutions","lead_payIn":"80.00"}]';

$array = json_decode($str, TRUE);
// echo "<pre>";print_r($array);echo "</pre>";
$totals = array();
// foreach ($array as $partner) {   
// 	echo "partner_name: " . $partner['partner_name'] . "<br>";   
// 	echo "lead_payIn: " . $partner['lead_payIn'] . "<br>";   


	foreach ($array as $item) {
		"<pre>";$partner_name = $item['partner_name'];"<pre>";
	$lead_payIn = $item['lead_payIn'] ;
	 
    if (array_key_exists($partner_name, $totals)) {
        $totals[$partner_name] += $lead_payIn ; 
		
    } else {
        $totals[$partner_name] = $lead_payIn ;
    }
}

print_r($totals);
?>







