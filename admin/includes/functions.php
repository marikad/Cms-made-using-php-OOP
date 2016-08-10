<?php 


function classAutoloader($class){

	$class = strtolower($class);

$the_path = INCLUDES_PATH . "/{$class}Class.php";

	if (is_file($the_path) && !class_exists($class)) {
		include $the_path;
	}

}

function redirect($location){
	header("Location: {$location}");
}

spl_autoload_register('classAutoloader');





?>