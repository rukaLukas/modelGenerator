<?php
include 'ModelGenerator.php';
$model = new ModelGenerator('./schema.sql', './files');
$model->run();


?>