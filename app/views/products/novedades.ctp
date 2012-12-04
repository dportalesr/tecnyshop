<?php
echo
	$this->element('top',array('header'=>'Novedades'));

	foreach ($items as $item) {
		echo
			$html->div('product_novedad'),
				$html->tag('h1',$item[$_m[0]]['nombre'],'title'),
				$this->element('inlinegallery',array('data'=>$item[$_m[0].'img'],'rel'=>$item[$_m[0]]['id'])),
			'</div>';
	}

?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>