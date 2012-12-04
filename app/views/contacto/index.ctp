<?php
echo
	$this->element('top'),
	$html->div('clear'),
		$html->div('form'),
			$html->para('note','¿Tienes alguna duda, quieres solicitar alguna información o simplemente dejarnos un comentario? Ponemos a tu disposición el siguiente formulario garantizándote una pronta respuesta.'),
	
			$form->create('Contact',array('id'=>'ContactForm','url'=>'/contacto/enviar')),
			$form->input('mail',array('div'=>'hide')),
			$html->div('subform'),
				$this->element('inputs',array(
					'formtag'=>false,
					'end'=>'Enviar',
					'after'=>$this->Captcha->input().$html->para('leydatos','Sus datos serán usados de acuerdo a los términos de la '.$html->link('Ley Federal de Protección de Datos Personales','http://dof.gob.mx/nota_detalle.php?codigo=5150631&fecha=05/07/2010',array('target'=>'_blank','rel'=>'nofollow'))),
					'schema'=>array(
						'producto'=> empty($this->data[$_m[0]]['producto']) ? 'skip':array()
					)
				)),
			'</div>',
		'</div>',
		$html->div('info'),
			$html->para(null,'TECNY <br/>01-800 00 83269'),
			$html->para(null,'EGGER <br/>01-800 00 34437'),
			$html->para(null,'Teléfonos <br/>52-33-38178409 <br/>52-33-38178505'),
			$html->para(null,'Buenos Aires #2260 <br/>Col. providencia <br/> Guadalajara, Jalisco, México.'),
			$html->para('email',$util->ofuscar('info@'.Configure::read('Site.domain'))),
			/*
			$html->div('title title3','Cómo llegar'),
			$html->link($html->image('mapa.jpg'),'/img/mapa.jpg',array('class'=>'pulsembox mapa')),
			*/
		'</div>',
	'</div>',

	$moo->ajaxform('ContactForm');
?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>