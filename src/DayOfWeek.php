<?php
	 class DayOfWeek
		{

		 function dayTester($month, $day, $year){

			$result = date("l", mktime(0, 0, 0, $month, $day, $year));
			return $result;

			}


		}

 ?>
