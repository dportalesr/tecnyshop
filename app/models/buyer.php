<?php
class Buyer extends AppModel {
	var $name = 'Buyer';
	var $labels = array();
	var $skipValidation = array();
	var $validate = array();
	var $hasMany = array(
		'Order'=>array(
			'className'=>'Order',
			'dependent'=>true
		)
	);    
}
?>