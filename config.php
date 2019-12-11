<?php

	// code reference : https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-rekognition-2016-06-27.html#detectlabels
	require 'vendor/autoload.php';
	$args = [
		'credentials' => [
			'key' => 'xxxxxx',
			'secret' => 'xxxxxx',
		],
		'region' => 'us-east-1',
		'version' => 'latest'
	];
	
	try 
	{
	 	$rekognition = new Aws\Rekognition\RekognitionClient( $args );
	} 
	catch (AwsException $e) 
	{
		echo "<pre>"; print_r($e->getMessage()); echo "</pre>"; die;
	}