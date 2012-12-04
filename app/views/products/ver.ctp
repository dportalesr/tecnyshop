<?php
echo
	$this->element('top',array('header'=>false)),
	$html->div('detail'),
		$html->tag('h1',$item[$_m[0]]['nombre'],array('class'=>'title')),
		$html->div('clear'),
			$util->th($item[$_m[0]],false,array(
				'w'=>236,
				'class'=>'portada pulsembox',
				'url'=>true,
				'atts'=>array('rel'=>'roller')
			)),
			$html->div('desc tmce',$item[$_m[0]]['descripcion'].''),
		'</div>',

		$this->element('inlinegallery',array('data'=>$item[$_m[0].'img'])),
		$this->element('share'),
	'</div>';
?>
</div>
</div><!-- content -->
<?php echo $this->element('sidebar'); ?>