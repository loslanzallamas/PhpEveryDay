<?php

	function Calc_Order($price, $order){
		$order = (int)$order;
		if($order<1){
			return 0;
		}
		return $pay = $price * $order;
	}
	
	$total = Calc_Order(1000, trim($_REQUEST["total"]));
	if($total > 0){
		echo "Total you must pay: ";
		echo number_format($total);
	} else {
		echo "Order input not valid";
	}

?>