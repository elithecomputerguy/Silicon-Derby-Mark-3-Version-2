<meta http-equiv="refresh" content="5">

<?php

$stats = file("status.txt");

foreach ($stats as $line){
    if(strpos($line, "user")){
        $line = trim($line, "top - ");
        echo "$line<br>";
    }

    if(strpos($line, "Cpu")){
        $line = trim($line, "%Cpu(s):");
        echo "CPU Status: $line<br>";
    }

    if(strpos($line, "buff/cache")){
        $line = ltrim($line, "MiB Mem:");
        echo "RAM Status: $line<br>";
    }

    if(strpos($line, "dev")){
        $line = explode(" ",$line);
        echo "Storage Status: Disk Space Used = $line[16] Total Space = $line[8] Used Space = $line[10] Free Space = $line[13] <br>";
    }
}
?>