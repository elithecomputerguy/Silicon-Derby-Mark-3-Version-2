
<?php
$direction = $_GET['direction'];

$speed = $_GET['speed'];

if ($direction != ""){
    file_put_contents("command.txt", $direction);

}

if ($speed != ""){
    file_put_contents("speed.txt", $speed);
}
?>