<?php 

$idDiscution = $_POST['idDiscution'];

if ($idDiscution == 0) {
	$json = array(
		"infos" => array(
			"title" => "Lorem Ipsum",
			"members" => array("Yolo")
		),
		"messages" => array()
	);
} else if (rand(0, 1)) {
	$json = array(
		"infos" => array(
			"title" => "Lorem Ipsum",
			"members" => array("Yolo", "Blop", "Swag")
		),
		"messages" => array(
			array(
				"id" => 0,
				"avatar" => "http://lorempicsum.com/nemo/255/200/2",
				"pseudo" => "Bidule",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 1,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			),
			array(
				"id" => 2,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Bidule",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 3,
				"avatar" => "http://lorempicsum.com/nemo/255/200/2",
				"pseudo" => "Bidule",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 4,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			),
			array(
				"id" => 5,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Bidule",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 6,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			),
			array(
				"id" => 3,
				"avatar" => "http://lorempicsum.com/nemo/255/200/2",
				"pseudo" => "Bidule",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			)
		)
	);
} else {
	$json = array(
		"infos" => array(
			"title" => "Lorem Ipsum",
			"members" => array("Yolo")
		),
		"messages" => array(
			array(
				"id" => 0,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Yolo",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 1,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Yolo",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 2,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Yolo",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 3,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			),
			array(
				"id" => 4,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Yolo",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 5,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			),
			array(
				"id" => 3,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			),
			array(
				"id" => 4,
				"avatar" => "http://lorempicsum.com/simpsons/255/200/5",
				"pseudo" => "Yolo",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita"
			),
			array(
				"id" => 5,
				"avatar" => "http://lorempicsum.com/up/255/200/2",
				"pseudo" => "Chnok",
				"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laborum enim expedita",
				"my" => true
			)
		)
	);
}

echo json_encode($json);