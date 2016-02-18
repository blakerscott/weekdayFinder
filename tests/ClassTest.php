<?php

	require_once 'src/DayOfWeek.php';

	class DayOfWeekTest extends PHPUnit_Framework_TestCase
	{

		function test_DayOfWeek()
		{
		//Arrange
		$test_DayOfWeek = new DayOfWeek;
		$month = '12';
		$day = '18';
		$year = '2016';

		//Act
		$result = $test_DayOfWeek->dayTester($month, $day, $year);

		//Assert
		$this->assertEquals('Thursday', $result);
		}
	}

?>
