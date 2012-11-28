<?php

echo
	$this->element('adminhdr',array('links'=>array('back'))),
	$this->element('inputs',array(
		'schema'=>array(
			'category'=>array('div'=>'col col50 category'),
			'currency_id'=>array('default'=>1,'div'=>'col col16'),
			'precio'=>array('div'=>'col col16'),
			'stock'=>array('div'=>'col col16 omega'),
			'Type'=>array(
				'elist',
				'fields'=>array(
					'id',
					'nombre'=>array('edit'=>1),
					'precio'=>array('edit'=>1,'optional'=>'Precio'),
					'stock'=>array('edit'=>1,'optional'=>'Stock'),
					'orden'
				),
				'options'=>array('data'=>@$orderdata,'sort'=>1,'delete'=>1,'adder'=>'elist_adder'),
				'afterof'=>'tipo_etiqueta'
			)
		)
	)),
	$this->element('tinymce',array('advanced'=>1,'size'=>'m'));
?>