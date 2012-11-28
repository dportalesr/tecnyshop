<?php
if(!isset($out_of_stock)) $out_of_stock = array();
fb($out_of_stock,'$out_of_stock');

echo $this->element('top');

	if(!empty($cart_flash))
		echo $html->div('warning',$cart_flash);
	
	if($items){
		$cart_table_cells = array();
		$total = 0;

		echo $form->create(null,array('id'=>'CartForm'));

		foreach($items as $item_key => $item){

			if(!empty($item['Type']['precio']))	$item['Product']['precio'] = $item['Type']['precio'];
			if(!empty($item['Type']['nombre']))	$item['Product']['nombre'].= ' ('.$item['Type']['nombre'].')';
			
			$url = array('action'=>'ver','id'=>$item['Product']['slug']);
			$item_total = $item['Product']['precio'] * $item['qty'];
			$total+= $item_total;

			$oversold = array_key_exists($item_key, $out_of_stock);
			$sold_out = $oversold && (!$out_of_stock[$item_key]);
			
			$cart_table_cells[] = array(
				$util->th($item,'Product',array('w'=>90,'h'=>90,'fill'=>true,'url'=>$url)),
				array($html->link($item['Product']['nombre'],$url,array('target'=>'_blank','rel'=>'nofollow')),array('class'=>'product_name')),
				array(
						$item['Product']['precio'].' x '.
						$form->input('Product.'.$item_key.'.qty',array(
							'type'=>'text',
							'value'=>$sold_out ? 0 : ( $oversold ? $out_of_stock[$item_key] : $item['qty']),
							'maxlength'=>3,
							'disabled'=>$sold_out ? 'disabled':'',
							'label'=>false,
							'div'=>array('tag'=>'span')
						)).
						' ('.$html->tag('span',number_format($item_total,2),array('id'=>'precio_'.$item_key)).')'.
						$form->submit('Actualizar',array('class'=>'updateqty'))
					,array('class'=>'nowrap')
				),
				$oversold ? $html->link($sold_out ? 'Agotado' : $out_of_stock[$item_key].' disponibles','javascript:;',array('class'=>'out_of_stock tipCaller')):'',
				$form->submit('Eliminar',array('name'=>'data[remove]['.$item_key.']','class'=>'remove'))
			);			
		}

		$cart_table_cells[] = array('','',$html->tag('span',number_format($total,2),array('id'=>'cart_total')),'','');

		echo
			$html->tag('table',null,'cart_list'),
				$html->tableHeaders(array('','Producto','Cantidad/Total','','Eliminar')),
				$html->tableCells($cart_table_cells,array('class'=>'odd')),
			'</table>',
			$form->submit('Checkout',array('name'=>'data[checkout]')),
		$form->end();

		/**/
		$moo->addEvent('.updateqty','click',array(
			'url'=>'/products/updateqty',
			'data'=>'"CartForm"',
			'prevent'=>true,
			'css'=>true,
			'spinner'=>array('this.getParent("table")')
		));

		$moo->addEvent('.remove','click',array(
			'url'=>'/products/remove',
			'data'=>'"CartForm"',
			'prevent'=>true,
			'css'=>true,
			'onsuccess'=>'this.getParent("tr").nix();',
			'confirm'=>'Se eliminará este item de su carrito ¿Desea continuar?',
			'spinner'=>array('this.getParent("table")')
		));
		/*
		*/

	} else 
		echo $html->para('noresults','No hay elementos que mostrar');
?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>