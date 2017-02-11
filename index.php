<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="minu.css">
        <meta charset="UTF-8">
        <title>TERE</title>
	</head>
	
	<body>
	   <h1>TERE! Mina olen Anna Amelkina!</h1>
           <h2>TERE MAAILM!</h2>
	   <img src="anna.jpg" alt="Smiley face">
	<?php echo 'Current PHP version: ' . phpversion();
	echo phpversion();
	?>
	
	<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "10162815_tabel";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    
    mysqli_close($l);
	?>
	</body>
</html>
