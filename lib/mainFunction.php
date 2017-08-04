<?php 
function loadPage($controllerName, $actionName='Index')
{
	# code...
	include_once PathPrefix . $controllerName . PathPostfix;
	$function=$actionName . 'Action';
	$function();
}