setInterval(function() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "./tether.php");
    xmlhttp.send();

},1000);