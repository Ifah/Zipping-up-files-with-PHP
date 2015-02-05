<?php
require_once 'classes/Zipper.php';

$zipper = new Zipper;

$zipper->add('files/one.txt');
$zipper->add(array('files/two.txt', 'files/three.txt'));

$zipper->store('files/zipped.zip');