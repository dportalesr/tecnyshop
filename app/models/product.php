<?php
class Product extends AppModel {
	var $name = 'Product';
	var $labels = array(
		'comment_count'=>'comentarios',
		'category_id'=>'categoría',
		'currency_id'=>'moneda',
		'tipo_id'=>'tipo',
		'tipo_etiqueta'=>'Etiqueta de tipos',
		'productimg_count'=>'Imágenes'
	);

	var $hasMany = array(
		'Comment'=>array(
			'className'=>'Comment',
			'foreignKey'=>'parent_id',
			'conditions'=>array('parent'=>'Product'),
			'dependent'=>true
		),
		'Productimg'=>array(
			'className'=>'Productimg',
			'order'=>'Productimg.orden asc',
			'dependent' => true
		),
		'Type'=>array(
			'className'=>'Type',
			'dependent'=>true
		),
		'OrderDetail'=>array(
			'className'=>'OrderDetail',
			'dependent' => true
		)
	);
	var $hasOne = array(
		'Productportada'=>array(
			'className'=>'Productimg',
			'foreignKey'=>'product_id',
			'conditions'=>'Productportada.portada = 1'
		)
	);
	var $belongsTo = array('Category','Currency');
	var $validate = array();

}
?>