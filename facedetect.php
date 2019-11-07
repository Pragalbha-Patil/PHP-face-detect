<?php

require "FaceDetector.php";

use psp\FaceDetector;

$facedetect = new FaceDetector();
$facedetect->faceDetect($_FILES['image']['tmp_name']);
// $json = $facedetect->toJson();
// echo $json;
$facedetect->toJpeg();

