<?php
class Order extends AppModel {
	var $name = 'Order';
	var $labels = array();
	var $skipValidation = array();
	var $validate = array();
	var $belongsTo = array(
		'Buyer'=>array(
			'className'=>'Buyer',
			'counterCache'=>true
		)
	);
	var $hasMany = array(
		'Orderdetail'=>array(
			'className'=>'Orderdetail',
			'dependent'=>true
		)
	);    
}
?>