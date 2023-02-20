<?php
	include_once 'includes/dbh.php';
// Check connection

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
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
	<?php

		$sql = "SELECT * FROM toyota;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
	?>
	<div class="content-left">
		<h1 class="title">Database Name</h1>
		<div class="content-btn">Add Content</div>
		<div class="content-btn">Remove Content</div>
		<div class="content-btn">Edit Table</div>
		<form action="run_query_cmd.php" method="post" class="cmd-form">
			<div class="cmd-display">
				<p class="cmd-placeholder">Last SQL Queries</p>
				
				  <input placeholder='Example: INSERT INTO toyota (name, age) VALUES ("Supra", 22);' class="cmd-input" name="query">
				  <div class="box"></div>
				
			</div>
			<input type="submit" value="Submit" class="cmd-submit">
		</form>

	</div>

	<div class="content-right">
		<div class="table-interact">
			<h2 class="table-title">Toyota</h2>
			<div class="refresh">
				<svg class="refresh-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#FFFFFF;}
					</style>
					<path class="st0" d="M62.7,603v354.5l107.7-107.7c0,0,152.4,200.4,424.1,162.3c0,0,361.1-18.2,423.3-423.3V545h-188
						c0,0-1.7,227-235.2,283.3c0,0-198.8,31.5-289.9-116l108.5-108.5L62.7,603z"/>
					<path class="st0" d="M1017.8,486.9V132.4L910.1,240.1c0,0-152.4-200.4-424.1-162.3c0,0-361.1,18.2-423.3,423.3v43.9h188
						c0,0,1.7-227,235.2-283.3c0,0,198.8-31.5,289.9,116L667.4,486.1L1017.8,486.9z"/>
				</svg>
			</div>
		</div>
		<table class="table">
		  <tr>
		    <th class="column-name">Name</th>
		    <th class="column-name">Age</th>
		    <th class="column-name">Gearbox_type</th>
		  </tr>
		  <?php while ($row = mysqli_fetch_assoc($result)): ?>
		  <tr>
		    <td class="cell"><?php echo $row['name'];?></td>
		    <td class="cell"><?php echo $row['age'];?></td>
		    <td class="cell"><?php echo $row['gearbox_type'];?></td>
		  </tr>
		  <?php endwhile; ?>
		</table>
	</div>
</body>
</html>