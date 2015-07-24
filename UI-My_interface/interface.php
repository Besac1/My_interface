<?php
$exceptions = array('.', '..', '.git', 'UI-My_interface', 'index.php');
$files = array();
if ($dir = opendir($directory)) {

	while(false !== ($curr = readdir($dir))) {

		if (!in_array($curr, $exceptions)) {
			$files[] = $curr;
		}

	}
	sort($files);

	closedir($dir);

}

else {
	echo 'The folder could not be opened';
}