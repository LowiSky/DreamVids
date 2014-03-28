<?php 

$idDiscution = $_POST['idDiscution'];
$text = $_POST['text'];


// MEGA SCRIPT QUI MET ÇA DANS LA BDD !!!!!! (tout en securisant)

$json = array(
	"id" => 0,
	"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
	"pseudo" => "Yolo",
	"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
	"my" => true
);

echo json_encode($json);