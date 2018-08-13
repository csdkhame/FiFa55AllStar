<?php
include "header.inc.php";
if(!isset($_GET['pages'])){
	include "pages/index.php";
}else{
	include "pages/".$_GET['pages'].".php";
}
include "footer.inc.php";
?>