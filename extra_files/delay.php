<html>

<head>
<script>
window.onload = function(){
// Change this value to however many seconds you want to delay the text by.
var theDelay = 2;
var timer = setTimeout("showText()",theDelay*1000)
}
function showText(){
document.getElementById("delayedText").style.visibility = "visible";
}
</script>
</head>
<body>
<div id="delayedText" style="visibility:hidden">
This is some delayed text
</div>
</body>
</html>
