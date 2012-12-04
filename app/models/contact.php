<?php
class Contact extends AppModel {
	var $name = 'Contact';
	var $labels = array('telefono'=>'Teléfono');
	var $_schema = array(
		'nombre' =>array('type'=>'string', 'length'=>100),
		'email' =>array('type'=>'string', 'length'=>255),
		'telefono' =>array('type'=>'string', 'length'=>255),
		'ciudad' =>array('type'=>'string', 'length'=>255),
		'estado' =>array('type'=>'string', 'length'=>255),
		'comentarios' =>array('type'=>'text')
	);
	var $actsAs = array('Captcha');
	var $useTable = false;
	var $validate = array(
		'nombre' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Escribe un nombre por favor.'
		),
		'mail' => array(
			'rule'=>'blank',
			'required' => true,
			'allowEmpty' => true,
			'message' => 'Non-Human.'
		),
		'email' => array(
			'format'=>array(
				'rule' => 'email',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'La dirección de correo no parece ser válida. Corríjalo o escriba otro, por favor.'
			),
			'vacio' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Este campo no puede quedar vacío.'
			)		
		),
		'comentarios' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => '¡No ha escrito su mensaje!'
		)
	);
}
?>