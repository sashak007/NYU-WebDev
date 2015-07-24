<?php

$cxn = mysqli_connect(
	"mysql.students.wd.onepotcooking.com",
	"scps",
	"Kxnka5s3Vs",
	"classdb"
);

$tweet = $_POST['msg'];
$time = time();
$flag = 0;

$writeQuery = <<<END
INSERT INTO ndykes_twitterAnon 
(tweet_msg,time_created,flag) 
VALUES 
('{$tweet}','{$time}', '{$flag}');
END;

echo $writeQuery . "<br />"; // debugging;

$writeResult = $cxn->query($writeQuery);	
	echo $cxn->error;

?>