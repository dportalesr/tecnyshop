<?php
class Orderdetail extends AppModel {
	var $name = 'Orderdetail';
	var $labels = array();
	var $skipValidation = array();
	var $validate = array();
	var $belongsTo = array(
		'Order'=>array(
			'className'=>'Order',
			'counterCache'=>true
		),
		'Product'=>array(
			'className'=>'Product',
			'counterCache'=>true
		),
		'Type'=>array(
			'className'=>'Type',
			'counterCache'=>true
		)
	);
}
?>