<html>
<head>
<style type=text/css>
    .stream-box { background-image: url(":8090/stream"); background-repeat:no-repeat; $
</style>
<script>
function setHref() {
document.getElementById('modify-me').src = window.location.protocol + "//" + window.location.hostname + ":8090/stream";
}
</script>
</head>
<body onload="setHref()">
&nbsp;
<center><button onclick="goBack()">Go Back</button></center>
<br></br>
<div class="stream-box">
</div>
<script>
function goBack() {
    window.history.back();
}
</script>
<img id="modify-me"alt="" src="/stream" width="1280" height="960" />
</body>
</html>
