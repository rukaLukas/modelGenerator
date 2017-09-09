<?php
include 'ModelGenerator.php';
$model = new ModelGenerator('path/schema.sql', 'path/model_files');
$model->run();


?>