<?php

// a handy function to "console.log" PHP data
function consoleLog($data, $function) 
{
	if (is_array($data) || is_object($data)) $data = json_encode($data);
	else if (is_string($data)) $data = '"' . $data . '"';

	if (!$function) $function = 'log';
	
	echo('<script>console.' . $function . '(' . $data . ');</script>');
}

// let's give a proper name to the function to print the active theme's folder
function theActiveThemeDirectory()
{
	$directory = get_template_directory_uri() . '/';
	print $directory;
}

function getBowerDirectory()
{
	$directory = get_template_directory_uri() . '/bower_components/';
	if (!fileExists($directory)) consoleLog("You seem to be missing the 'bower_components' folder", 'error');
	else return $directory;
}

function theHTML5BoilerplateDirectory()
{
	$directory = getBowerDirectory() . 'html5-boilerplate/dist/';
	if (!fileExists($directory)) consoleLog("You seem to be missing the 'html5-boilerplate/dist' folder", 'error');
	print $directory;
}

function theSkeletonDirectory()
{
	$directory = getBowerDirectory() . 'skeleton-css/';
	if (!fileExists($directory)) consoleLog("You seem to be missing the 'skeleton-css' folder", 'error');
	print $directory;
}

// from http://php.net/manual/en/function.file-exists.php#103436
function fileExists($path)
{
    return (@fopen($path, 'r') == true);
}



?>