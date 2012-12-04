<?php
class Aboutimg extends AppModel {
	var $name = 'Aboutimg';
	var $actsAs = array('File'=>array('portada'=>'about_id'));
	var $belongsTo = array(
		'About' => array(
			'className'=>'About',
			'counterCache' => true
		)
	);
}
?>