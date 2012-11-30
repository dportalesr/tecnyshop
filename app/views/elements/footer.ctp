<?php
echo
	$html->div('footer'),
		$html->div('grey_top',$html->div('center','')),
		$html->div('grey_bottom'),
			$html->div('center'),
				$html->div('banners',$this->element('banners',array()),array('id'=>'banners')),
				$html->link('Comprometidos con el medio ambiente',array('controller'=>'medio_ambiente','action'=>'index'),array('class'=>'comprometidos_medio_ambiente')),
			'</div>',
		'</div>',
	$html->div('center'),
		$html->tag('ul'),
			$html->tag('li',$html->link('Inicio','/')),
			$html->tag('li',$html->link('Nosotros',array('controller'=>'about','action'=>'index'))),
			$html->tag('li',$html->link('Medio Ambiente',array('controller'=>'medio_ambiente','action'=>'index'))),
			$html->tag('li',$html->link('Contacto',array('controller'=>'contacto','action'=>'index'))),
		'</ul>',
		$html->para(null,'Buenos Aires #2260 Colonia Providencia, Guadalajara, Jalisco, México.'),
		$html->para(null,'Tel. (+52) 33-38178409, (+52) 33-38178505,<br/>01(800)00-34437(egger) 01(800)00-83269 (tecny)'),
		$html->para(null,$util->ofuscar('info@tecnyshop.mx')),
		$html->para(null,Configure::read('Site.name').' &copy; '.date('Y'),array('id'=>'copyright'));
?>
</div><!-- .center -->
</div><!-- .footer -->