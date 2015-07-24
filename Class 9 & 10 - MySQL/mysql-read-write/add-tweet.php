<?php

$cxn = mysqli_connect(
	"mysql.students.wd.onepotcooking.com",
	"scps",
	"Kxnka5s3Vs",
	"classdb"
);

$tweet = mysqli_real_escape_string($cxn,$_POST['msg']);
$time = time();
$flag = 0;

$writeQuery = <<<END
INSERT INTO ndykes_twitterAnon 
(tweet_msg,time_created,flag) 
VALUES 
('{$tweet}', FROM_UNIXTIME('{$time}'), '{$flag}');
END;

$writeResult = $cxn->query($writeQuery);	
	echo $cxn->error;

header("Location: index.php");
?>