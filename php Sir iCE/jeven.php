<html>
	<body>
		<?php
			$uString = "";
			if(isset($_REQUEST['txtStr'])){
				$uString = $_REQUEST['txtStr'];
			}
		?>
	<form action = "jeven.php" method= "post">
	Enter a String<br>
	<input type = "text" name = "txtStr"/>
	<input type = "submit" value = "Go">
	</form>
	<?php
		echo "$uString <br/>";
		$myStr = "ICE";
		echo $myStr . "<br/>";
		echo "Sir $myStr <br/>";
		echo 'Sir $myStr <br/>';
		echo "Sir ", $myStr, "<br/>";
	?>
	</body>
</html>
