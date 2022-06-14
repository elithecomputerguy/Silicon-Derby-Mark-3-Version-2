<div style='width:200px; margin-left:auto; margin-right:auto;'>
<p>Command (Use NumPad)</p>
<form id="form" onsubmit="return false">
<input type="text" placeholder="Press command keys here" id="kinput">
</form>
<p>Speed: <span id="speed"></span></p>
<p>Direction: <span id="direction"></span></p>
</div>
  
<script>
    window.onload = function() {
    document.getElementById("kinput").focus();
  };

kinput.onkeydown = handle;

speed = " ";
direction = " ";

function send_direction(direction){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "./command.php?direction=" + direction);
    xmlhttp.send();
}

function send_speed(speed){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "./command.php?speed=" + speed);
    xmlhttp.send();
}

function handle(e) {

    if(e.code == "Numpad8"){
        direction = "forward";
        send_direction(direction);
    }

    if(e.code == "Numpad7"){
        direction = "forwardLeft";
        send_direction(direction);
    }

    if(e.code == "Numpad9"){
        direction = "forwardRight";
        send_direction(direction);
    }

    if(e.code == "Numpad4"){
        direction = "left";
        send_direction(direction);
    }

    if(e.code == "Numpad5"){
        direction = "stop";
        send_direction(direction);
    }

    if(e.code == "Numpad6"){
        direction = "right";
        send_direction(direction);
    }

    if(e.code == "Numpad2"){
        direction = "backward";
        send_direction(direction);
    }

    if(e.code == "Digit1"){
        speed = "slow";
        send_speed(speed);
    }

    if(e.code == "Digit2"){
        speed = "medium";
        send_speed(speed);
    }

    if(e.code == "Digit3"){
        speed = "fast";
        send_speed(speed);
    }
        document.getElementById("speed").innerHTML = speed;
        document.getElementById("direction").innerHTML = direction;

        kinput.value = " ";  
        kinput.value = e.code;
    }
</script>