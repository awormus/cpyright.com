<?php
if ($_SERVER['HTTP_ACCEPT'] == "*/*"){
	echo 'document.write("'.date('Y').'")';
} else {
	echo "If you can figure out what this is, you won't need it<br><br>This script &copy; <script src='http://cpyright.com'></script> Aaron Wormus";
}
