<?php

$cxn = mysqli_connect(
	"mysql.students.wd.onepotcooking.com",
	"scps",
	"Kxnka5s3Vs",
	"classdb"
);

$readQuery = "SELECT * FROM ndykes_twitterAnon ORDER BY time_created DESC";
$readResult = $cxn->query($readQuery);
	echo $cxn->error; 


	$currentDateGMT = gmdate("Y-m-d\TH:i:s\Z", time()); //current date in GMT
	$postDateGMT = gmdate("Y-m-d\TH:i:s\Z", strtotime($row['time_created'])); //created date in GMT
	$dateDiffInSeconds = strtotime($currentDateGMT) - strtotime($postDateGMT); //difference in seconds between the two dates
	$dateDiffInHours = floor($dateDiffInSeconds / 3600); //difference in hours between the two dates

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
			<h1>Twitter Anon</h1>
		</header>
			<div class="main">
				<section class="post">
					<form method="POST" action="add-tweet.php">
						<label for="post">Post a status update:</label>
						<input type="text" name="msg" maxlength="140" placeholder="enter a post" />
						<input type="submit" value="Submit">
					</form>
				</section>

			<?php if ($_GET["flagged"]): ?>
				<p id="flagNote">POST HAS BEEN FLAGGED</p>
			<?php endif; ?>

			<?php while ($row = $readResult->fetch_assoc()) : ?>
				<?php
					$currentDateGMT = gmdate("Y-m-d\TH:i:s\Z", time()); //current date (GMT)
					$postDateGMT = gmdate("Y-m-d\TH:i:s\Z", strtotime($row["time_created"])); //created date (GMT)
					$dateDiffInSeconds = strtotime($currentDateGMT) - strtotime($postDateGMT); //difference in seconds 
					$dateDiffInHours = floor($dateDiffInSeconds / 3600); //difference in hours
				?>
				
				<article class="contentRow">
					<div class="tweet">
					<p id="timeStamp">Posted <?php echo $dateDiffInHours ?> hours ago</p>
					<p><?php echo $row["tweet_msg"]; ?></p>
					</div>
					<div class="flag">
						<?php echo "<a href='flagged.php?id=" . $row["id"] . "'> Flag as inappropriate</a>"; ?>
					</div>
				</article>
			
			<?php endwhile; ?>
			
			</div>
	</div>
</body>
</html>