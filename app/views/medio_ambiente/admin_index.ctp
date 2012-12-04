<?php
echo
	$this->element('adminhdr',array('title'=>'Sección '.$_ts,'links'=>array(array('text'=>'Fotos','class'=>'photos','href'=>'admin_images')))),
	$this->element('inputs'),
	$this->element('tinymce',array('size'=>'l','advanced'=>1));
?>