<?php
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Pragma: no-cache");

	$shell_file = __DIR__ . '/linux_json_api.sh';
	$module = escapeshellcmd($_GET['module']);

	echo str_replace("\\","",shell_exec( $shell_file . " " . $module ));
