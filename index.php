<!DOCTYPE html>
<html>
<head>
	<title>Calculate Age from Date of Birth</title>
	<style>
	p
	{
	background:cyan;
	width:600px;
	border:2px solid #000;
	height:20px;
	padding:5px;
	}
	</style>
</head>
<body bgcolor="blue">
	<!--
		*******************************************************************************

		I M P O R T A N T -- N O T I C E
		- - - - - - - - -    - - - - - -

		Created and Designed by MUhammad Abba Gana

		Do NOT copy and paste this code from a web browser "View Source" Window.

		The actual code contains server-side function calls which do not appear in a
		"View Source" situation even copy cannot work!!

		Please refer to the supplied templates on the product CD.
		
			for more contact me on the following details;

			Email address: BeWithMetechnology@gmail.com
			Phone Number: +2349039016969, +2348134041311
			website:www.bewithmetech.com.ng

		*******************************************************************************
	-->
<center>
	<img src="logo.jpg" width="500" width="500" title="Be With Me Technology Yola">
		<h1>Calculate Age From Date of Birth</h1>
		<form method="post">
				<select name="day" required>
					<option value="">Day</option>
					<?php 
					for($day=01;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select>
			
				<select name="month" required>
					<option value="">Month</option>
					<?php 
					for($month=01;$month<=12;$month++)
					{
					echo "<option value='$month'>$month</option>";
					}
					?>
				</select>
				<select name="year" required>
					<option value="">Year</option>
					<?php 
					for($year=2016;$year>=1950;$year--)
					{
					echo "<option value='$year'>$year</option>";
					}
					?>
				</select><br><br>
				
				<input type="submit" name="submit" value="Submit">
				
					<?php
					if(isset($_POST['submit']))
					{
					$day=$_POST['day'];
					$month=$_POST['month'];
					$year=$_POST['year'];
					$age = (date("md", date("u", mktime(0, 0, 0, $day, $month, $year))) > date("md") ? ((date("Y")-$year)-1):(date("Y")-$year));
					echo "<p>Your Age is: $age</p>";
					}
					?>
		</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<strong>Powered By Muhammad Abba Gana</strong>
</html>