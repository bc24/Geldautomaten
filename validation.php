<?php

$xml = $_POST['xml'];

// TODO Parser
$xml_array ....

// DB Connection
// select
$xml_array['atm']['cardnummer']

$card_valid
$card_balance
$card_pincode
$card_holder
$card_bank


// Valiation

if($card_valid){

	if($card_pincode == $xml_array['atm']['pincode']){
		if($){
			// success
		}elseif(){
			$error = "003";
		}else{
			$error = "004";
		}
	}else{
		$error = "002";
	}

}else{
	$error = "001";
}

?>