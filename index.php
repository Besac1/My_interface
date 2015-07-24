<?php require 'UI-My_interface/config.php'; ?>
<?php require 'UI-My_interface/interface.php'; ?>
<!DOCTYPE html>

<html lang = 'fr'>

<head>

	<title>My_interface</title>
	<link rel="stylesheet" type="text/css" href="UI-My_interface/style.css">
	<meta charset = "UTF-8"/>

</head>


<body>

	<?php var_dump($files); ?>
	
	<section id = "mainpage">
		
		<p>C'est ma partie de tests</p>
		<div id = 'context'>
			
            <ol id = 'menu'>
                
                <li class = "choix" value = "1">Nouveau dossier</li>
                <li class = "choix" value = "2">Va bien niquer</li>

            </ol>

		</div>

	</section>

    <script type = "text/javascript" src = "UI-My_interface/JS/script.js"></script>

</body>

</html>