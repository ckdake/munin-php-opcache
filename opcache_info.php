<?php

/**
 * @file
 * OPcache Info file.
 */

if (extension_loaded('Zend OPcache')) {
	$configuration = opcache_get_configuration();
	$status = opcache_get_status();
	
	$output = array(
		'size: ' . $configuration['directives']['opcache.memory_consumption'],
		'used: ' . $status['memory_usage']['used_memory'],
		'free: ' . $status['memory_usage']['free_memory'],
		'hits: ' . $status['opcache_statistics']['hits'],
		'misses: ' . $status['opcache_statistics']['misses'],
	);


} else {
	$output = array('Zend-OPcache-not-loaded');
}

echo implode(' ', $output);
