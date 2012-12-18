<?php
if(is_c('products',$this)){
	$id = (int)$this->params['id'];
	$items = array();

	switch ($id) {
		case 2: // Egger
			$items = array('Muestrario Hoja Carta');
		break;
		case 3: // Tableros
			$items = array('Consejos de Aplicación','EURODEKOR','Tableros Melanimizados');
		break;
		case 4: // Laminados
			$items = array('Laminados');
		break;
		case 5: // Cantos ABS
			$items = array('Cantos ABS','Consejos ABS','Mantenimiento');
		break;
		case 6: // Colección 2013
			$items = array('Muestrario Hoja Carta');
		break;
		case 7: // Virtual Design Studio
			$items = array('Virtual Design Studio');
		break;
		default: break;
	}

} elseif(is_c('medio_ambiente',$this)){
	$items = array('Medio Ambiente EGGER','Certificado Gestión Sustentable','Declaración Ambiental','Ecología');

} elseif(is_c('about',$this))
	$items = array('Productos y Servicios');

if($items){
	echo
		$html->div('descargables'),
			$html->div('title title3','Documentos'),
			$html->tag('ul');

			foreach ($items as $pdf) {
				echo $html->tag('li',$html->link($pdf,strtolower('/pdfs/'.Inflector::slug($pdf).'.pdf'),array('target'=>'_blank','rel'=>'nofollow')));
			}
			echo '</ul>',
		'</div>';
}
?>
