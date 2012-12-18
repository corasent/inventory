<?php 

require 'config.php';
require 'load.php';
require 'model.php';
require 'controller.php';

$controller = new Controller();

$controller->db_connect();
$controller->about();

