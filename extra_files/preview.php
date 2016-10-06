<?php
	$command = "/usr/bin/php5 -f /var/www/start_script.php ";
	exec("$command > /dev/null &", $arrOutput);
	/**exec("/usr/bin/php /var/www/start_script.php > /dev/null &");**/
	echo "$arrOutput Live Stream Started";
?>
