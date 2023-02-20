<?php
	include_once 'includes/dbh.php';
// Check connection

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database UI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content-left">
		<h1 class="title">Database Name</h1>
		<div class="content-btn">Add Content</div>
		<div class="content-btn">Remove Content</div>
		<div class="content-btn">Edit Table</div>

		<div class="cmd-display">
			<p class="cmd-placeholder">Last SQL Queries</p>
			<p class="cmd-text">
				INSER INTO toyota (name, age)
				VALUES ("Supra", 22);
			</p>
			<div class="box"></div>
		</div>

	</div>
	<div class="content-right">
		<div class="table-interact">
			<h2 class="table-title">Table</h2>
			<div class="refresh"></div>
		</div>
		<table class="table">
		  <tr>
		    <th>Header 1</th>
		    <th>Header 2</th>
		  </tr>
		  <tr>
		    <td>Row 1, Column 1</td>
		    <td>Row 1, Column 2</td>
		  </tr>
		  <tr>
		    <td>Row 2, Column 1</td>
		    <td>Row 2, Column 2</td>
		  </tr>
		</table>
	</div>
</body>
</html>