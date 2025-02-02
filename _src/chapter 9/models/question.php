<?php

class Question extends AppModel {

	var $name = 'Question';
	
	var $hasMany = array(
		'Answer' => array(
			'className'     => 'Answer'
		)
	);
	
	var $validate = array(
		'question' => array(
			'rule' => array('minLenght', 1),
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Question cannot be empty'
		),
		'questioner' => array(
			'rule' => array('minLenght', 1),
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Please enter your name'
		)
	);

}

?>