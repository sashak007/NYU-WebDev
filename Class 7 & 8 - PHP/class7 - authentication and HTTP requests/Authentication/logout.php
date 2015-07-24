<?php
header("Location: index.php?logged-out=1");
setcookie("user","",1);
die();
?>