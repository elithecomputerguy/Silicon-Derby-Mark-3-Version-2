<div id='command-display' style='margin-left:auto; margin-right:auto; width:300px; height:10px;'></div>

<p style='text-align:center;'>
<button onclick="html()">HTML</button>
<button onclick="keyboard()">Keyboard</button>
<button onclick="gamepad()">Gamepad</button>
</p>

<p style='text-align:center;'>
<button onclick="command_read()">Commands</button>
<button onclick="resource_read()">System Resources</button>
</p>
<div id='controls' style='margin-left:auto; margin-right:auto; width:300px; height:10px;'>
</div>

<div id='resource-display' style="width:800; margin-left:auto; margin-right:auto;"></div>


<script>

function html() {
    document.getElementById("controls").innerHTML = "<iframe src='./html-panel.php'></iframe>"
    document.getElementById("controls").innerHTML = "<iframe style='height:150px;' src='./html-panel.php'></iframe>"
}

function keyboard() {
  document.getElementById("controls").innerHTML = "<iframe src='./keyboard-panel.php'></iframe>"
  document.getElementById("controls").innerHTML = "<iframe style='height:150px;' src='./keyboard-panel.php'></iframe>"

}

function gamepad() {
    document.getElementById("controls").style.height = "auto";
    document.getElementById("controls").innerHTML = "<iframe style='height:250px;' src='./gamepad-panel.php'></iframe>"
}

var show_command = 0;

function command_read() {
    if(show_command == 0){
        show_command = 1;
    } else {
        show_command = 0;
    }

    if(show_command == 1){
        document.getElementById("command-display").style.height = "auto";
        document.getElementById("command-display").innerHTML = "<iframe style='height:40px;' src='./command-display-panel.php'></iframe>"
    } else {
        document.getElementById("command-display").innerHTML = " ";
    }
}
var show_resource = 0;

function resource_read() {
    if(show_resource == 0){
        show_resource = 1;
    } else {
        show_resource = 0;
    }

    if(show_resource == 1){
        document.getElementById("resource-display").style.height = "auto";
        document.getElementById("resource-display").innerHTML = "<iframe style='width:700px; height:100px;' src='./system-status.php'></iframe>"
    } else {
        document.getElementById("resource-display").innerHTML = " "
    }
}
</script>