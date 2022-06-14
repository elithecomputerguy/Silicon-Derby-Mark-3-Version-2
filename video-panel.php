<p style='text-align:center;'>
<button onclick="enlarge()">Enlarge</button>
<button onclick="reset()">Reset</button>
<button onclick="shrink()">Shrink</button>
</p>

<?php
$ip = $_SERVER['SERVER_ADDR'];
?>

<img id='video' src='http://<?php echo $ip ?>:8000/stream.mjpg' style='display:block; margin-left:auto; margin-right:auto;
width:50%; height:auto;'>

<br>

<script>

var size = 50;    

function enlarge() {
    size = size + 10;
  document.getElementById("video").style.width = size +'%';
}
function reset() {
    size = 50;
    document.getElementById("video").style.width = size + '%';
}
function shrink() {
    if(size >= 20){
        size = size - 10;
        document.getElementById("video").style.width = size + '%';
    }
}
</script>