
<?php
	exec("sudo /var/www/html/bash/start_script.sh > /dev/null &", $arrOutput);
	sleep(10);
	echo "Live Stream Started (You must stop the live stream before recording).";
 ?>
