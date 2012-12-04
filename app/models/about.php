<?php
class About extends AppModel {
	var $name = 'About';
	var $useTable = 'about';
	var $actsAs = array('File' => array('portada'=>false));
	var $hasMany = array(
		'Aboutimg'=>array(
			'className'=>'Aboutimg',
			'dependent'=>true
		)
	);    
}
?>