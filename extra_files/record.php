<html>
    <head>
	<script>
		//window.onload = function(){
		//	var timer = setTimeout("showDone()", 2000)
		//}
		function showDone(){ 
		    document.getElementById("doneRecording").style.visibility = "visible";
		}
		setTimeout("showDone()", 5000);
	</script>
       <meta http-equiv="refresh" content="6;url=index.php" />
    </head>
    <body>
    	<?php 
			//exec('python /home/pi/test.py');
			 $command = escapeshellcmd('/home/pi/test.py');
			$output = shell_exec($command);
			echo $output;
	?>
        <h1>Recording Video. Please Wait.</h1>
	<div id="doneRecording" style="visibility:hidden">
		<h1>All done! Redirecting...</h1>
	</div>
    </body>
</html>
