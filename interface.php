<?php
$exceptions = array('.', '..', '.git', 'index.php', 'interface.php', 'style.css', 'img');
$files = array();
if ($dir = opendir('./')) {

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

?>