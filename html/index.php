<?php
require '/var/www/fallendice/repo/fallendice/db.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Fallendice</title>
	<style>
		#div1 {
			width: 350px;
			height: 70px;
			padding: 10px;
			border: 1px solid #aaaaaa;
		}
	</style>
	<script>
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
		}
	</script>
</head>
<body>
	such a moron
	<p>Drag the W3Schools image into the rectangle:</p>

	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
	<br>
	<img id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">

</body>
</html>