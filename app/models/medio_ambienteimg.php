<?php
class MedioAmbienteimg extends AppModel {
	var $name = 'MedioAmbienteimg';
	var $actsAs = array('File'=>array('portada'=>'medioAmbiente_id'));
	var $belongsTo = array(
		'MedioAmbiente' => array(
			'className'=>'MedioAmbiente',
			'counterCache' => true
		)
	);
}
?>