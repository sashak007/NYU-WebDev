<?php

$cxn = mysqli_connect(
	"mysql.students.wd.onepotcooking.com",
	"scps",
	"Kxnka5s3Vs",
	"classdb"
);
$id = $_GET["id"];
$flag = 1;

$writeQuery = <<<END
UPDATE ndykes_twitterAnon 
SET flag = 1 WHERE id=$id
END;

$writeResult = $cxn->query($writeQuery);	
	echo $cxn->error;

header('Location: index.php');

?>