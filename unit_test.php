<?php

require ("UserModel.php");
$model = new UserModel();

//inserting
// echo "case 1";
// var_dump($model->insert("lojee","lojee@","123","awdawd"));


//updating
 echo "case 2";
var_dump($model->update("92"));

// //display
// echo "case 3";
// var_dump($model->readAll());

// //delete
// echo "case 4";
// var_dump($model->delete());


?>
