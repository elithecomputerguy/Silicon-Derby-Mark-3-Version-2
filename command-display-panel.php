<meta http-equiv="refresh" content="1">

<?php

$direction = file_get_contents("./command.txt");
$speed = file_get_contents("./speed.txt");

?>

<table>
<tr><td><strong>Speed:</strong></td><td> <span id="speed"><?php echo $speed ?></span></td><td><strong>Direction:</strong></td><td> <span id="direction"><?php echo $direction ?></span></td></tr>
</table>
