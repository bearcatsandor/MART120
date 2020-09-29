<html>
	<title>Bearcat Sandor - Form Results</title>
	<head>
		<link rel="stylesheet" href="style.css">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script>
			$(function(){
				$("#header-template").load("header.html");
				$("#footer-template").load("footer.html");
			});
		</script>
	</head>

	<body>
	<div id="header-template"></div>
	Hey there <?php echo $_POST["name"]; ?><br>
	Your email address is: <?php echo $_POST["email"]; ?>
	</body>
</html>
