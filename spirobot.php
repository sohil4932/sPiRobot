<?php
session_start();
include "control.html";

$action = $_GET['GO'];
$key = "";

switch ($action)
{
	case "ON":
		shell_exec('sudo /bin/bash /var/www/init.sh');
		break;
	case "OFF":
		shell_exec('sudo /bin/bash /var/www/shutdown.sh');
		break;
	case "CAM_ON":
		
		break;
	case "FORWARD":
		$key = "w";
		shell_exec('sudo /bin/bash /var/www/forward.sh');
		break;
	case "BACKWARD":
		$key = "s";
		shell_exec('sudo /bin/bash /var/www/backward.sh');
		break;
	case "LEFT":
		$key = "a";
		shell_exec('sudo /bin/bash /var/www/left.sh');
		break;
	case "RIGHT":
		$key = "d";
		shell_exec('sudo /bin/bash /var/www/right.sh');
		break;
	case "RELEASE":
		$key = "x";
		shell_exec('sudo /bin/bash /var/www/stop.sh');
		break;

	case "SLOWER":
		$key = "q";
		break;
	case "FASTER":
		$key = "e";
		break;
}
