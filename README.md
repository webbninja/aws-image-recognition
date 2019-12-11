# aws-image-recognition
recognition image object, detectlabels etc. with Amazon Rekognition API

For running local machine use 
## Installation
* clone the repo into `/var/www/html`
* Install [composer](https://getcomposer.org/download/) if its not installed in your computer
* `sudo cd /var/www/html/aws-image-recognition`  // for ubuntu 
* `sudo composer require aws/aws-sdk-php`
* Get AWS `public key` and `secret key` from AWS console
* Update keys in config file
* Open your browser on http://localhost/aws-image-recognition/detectLabels.php

## Important links
* [api-rekognition](https://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.Rekognition.RekognitionClient.html)
* [AWS console](https://aws.amazon.com/console/)
