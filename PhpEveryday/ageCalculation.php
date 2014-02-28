<?php
	function count_ages($start, $end){
		if($start != '0000-00-00' and $end !='0000-00-00'){
			$timestamp_start = strtotime($start);
			$timestamp_end = strtotime($end);
			
			if($timestamp_start >= $timestamp_end){
				return 0;
			};
			$start_year = date("Y",$timestamp_start);
			$end_year = date("Y",$timestamp_end);
			$num_days_start = date("z", strtotime($start));
			//$num_days_star = date("z", $timestamp_start);
			$num_days_end = date("z", strtotime($end));
			////$num_days_end = date("z", $timestamp_end);
			$num_days = 0;
			$i = 0;
			if($end_year > $start_year){
				while ($i < ($end_year - $start_year)){
					$num_days = $num_days + date("z", strtotime(($start_year + $i)."-12-31"));
					$i++;	
				};
			};
			
			return floor((($num_days_end + $num_days) - $num_days_start)/360);
		} else {
			return 0;
		};
	}
	
	
	$born = $year."-".$month."-".$day;
	$now = date("Y-m-d");

	echo count_ages($born, $now);
?>