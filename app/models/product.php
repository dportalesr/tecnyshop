<?php
class Product extends AppModel {
	var $name = 'Product';
	var $labels = array(
		'category_id'=>'categoría',
		'productimg_count'=>'Imágenes',
		'keywords'=>'META Palabras Clave',
		'description'=>'META Descripción'
	);

	var $hasMany = array(
		'Productimg'=>array(
			'className'=>'Productimg',
			'order'=>'Productimg.orden asc',
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
	var $belongsTo = array('Category');
	var $validate = array('src');
	var $actsAs = array('File' => array('portada'=>false));
	var $skipValidation = array('src','descripcion');
}
?>