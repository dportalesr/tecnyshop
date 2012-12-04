<?php
class MedioAmbiente extends AppModel {
	var $name = 'MedioAmbiente';
	var $useTable = 'medio_ambiente';
	var $actsAs = array('File' => array('portada'=>'medio_ambiente_id'));
	var $hasMany = array(
		'MedioAmbienteimg'=>array(
			'className'=>'MedioAmbienteimg',
			'dependent'=>true
		)
	);    
}
?>