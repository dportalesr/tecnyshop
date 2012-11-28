<?php
class Poll extends AppModel {
	var $name = 'Poll';
	var $hasMany = array(
		'Question'=>array(
			'classname' => 'Question',
			'dependent' => true
		),
		'Visitor' => array(
			'className' => 'Visitor',
			'foreignKey'=>'item_id',
			'conditions'=>array('Visitor.item'=>'Poll')
		)
	);
	var $validate = array();
}
?>