<?php

$cxn = mysqli_connect(
	"mysql.students.wd.onepotcooking.com",
	"scps",
	"Kxnka5s3Vs",
	"classdb"
);

$readQuery = "SELECT * FROM ndykes_twitterAnon WHERE flag=1 ORDER BY time_created DESC";
$readResult = $cxn->query($readQuery);
	echo $cxn->error; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Assignment</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
	<div class="container">
		<header>
			<h1>Twitter Anon Admin Page</h1>
		</header>
			<div class="main">
				<section class="post">
					<h1>Administer flagged post</h1>
				</section>

			
			<?php while ($row = $readResult->fetch_assoc()) : ?>

			<?php
					$currentDateGMT = gmdate("Y-m-d\TH:i:s\Z", time()); //current date/time in GMT
					$postDateGMT = gmdate("Y-m-d\TH:i:s\Z", strtotime($row["time_created"])); //created date in GMT
					$dateDiffInSeconds = strtotime($currentDateGMT) - strtotime($postDateGMT); //difference in seconds
					$dateDiffInHours = floor($dateDiffInSeconds / 3600); //difference in hours 
				?>
			
				<article class="contentRow">
					<div class="tweet">
					<p id="timeStamp">Posted <?php echo $dateDiffInHours ?> hours ago</p>
					<p><?php echo $row["tweet_msg"]; ?></p>
					</div>
					<div class="controls">
						<form method="POST" action="updatePost.php">
							<?php echo "<input type='hidden' name='id' value='" . $row["id"] . "'>"; ?>
							<input type="submit" name="delete" value="Delete"><br />
							<input type="submit" name="ignore" value="Ignore">
						</form>
					</div>
				</article>
			
			<?php endwhile; ?>
			
			</div>
	</div>
</body>
</html>