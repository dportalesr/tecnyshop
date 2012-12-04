<?php
App::import('Controller','_base/Imgs');
class MedioAmbienteimgsController extends ImgsController{
	var $name = 'MedioAmbienteimgs';
	var $uses = array('MedioAmbienteimg','MedioAmbiente');
}
?>