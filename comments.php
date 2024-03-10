
<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style2.css">
	<title>Comment System PHP | National Coding</title>
</head>
<body>



<nav>
        <div class="logo">
            bro<span>code</span>
        </div>
        <div class="menu">
            <a href="index1.php">Home</a>
            <a href="bscit.php">Notes</a>
            
          <a href="index.php">Shopping</a>
          <a href="index (2) (1).php">College List</a>
          <a href="comments.php">Comment</a>
          
        </div>
        <div class="icon">
            <ion-icon class="nav-search" name="search-outline"></ion-icon>
            
            <a href="login1.php">login</a>
        </div>
    </nav>
    <div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>

</body>
</html>














