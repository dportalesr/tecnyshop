<?php
echo $this->element('top',array('header'=>'Encuesta'));

if($poll){
	$hide = '';
	
	echo
		$html->div('title title2',$poll['Poll']['nombre']),
		$html->div('desc tmce',$poll['Poll']['descripcion'].''),
		$this->element('poll');

} else {
	echo $html->para('noresults','Actualmente, no hay encuestas disponibles. ¡Gracias por participar!');
}
?>
</div>
<?php echo $this->element('subsidebar'); ?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>