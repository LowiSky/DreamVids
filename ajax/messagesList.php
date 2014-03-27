<?php 

$json = array(
	array(
		"id" => 0,
		"avatar" => "http://lorempicsum.com/nemo/255/200/2",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => "3"
	),
	array(
		"id" => 1,
		"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => false
	),
	array(
		"id" => 2,
		"avatar" => "http://lorempicsum.com/up/255/200/2",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo", "Bla"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => "12"
	),
	array(
		"id" => 3,
		"avatar" => "http://lorempicsum.com/nemo/255/200/2",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => false
	),
	array(
		"id" => 4,
		"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo", "Blop", "Swag"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => false
	),
	array(
		"id" => 5,
		"avatar" => "http://lorempicsum.com/up/255/200/2",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => "8"
	),
	array(
		"id" => 6,
		"avatar" => "http://lorempicsum.com/up/255/200/2",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => false
	),
	array(
		"id" => 3,
		"avatar" => "http://lorempicsum.com/nemo/255/200/2",
		"title" => "Lorem Ipsum",
		"members" => array("Yolo"),
		"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
		"new" => false
	)
);

echo json_encode($json);