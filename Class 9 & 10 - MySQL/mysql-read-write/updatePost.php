<?php

$cxn = mysqli_connect(
	"mysql.students.wd.onepotcooking.com",
	"scps",
	"Kxnka5s3Vs",
	"classdb"
);

$id = $_POST["id"];

if($_POST["ignore"]){

$writeQuery = <<<END
UPDATE ndykes_twitterAnon 
SET flag = 0 WHERE id=$id
END;

} else{

$writeQuery = <<<END
DELETE FROM ndykes_twitterAnon 
WHERE id=$id
END;

}

$writeResult = $cxn->query($writeQuery);	
	echo $cxn->error;

header('Location: admin.php');

?>