<?php
App::import('Controller','_base/Section');
class AboutController extends SectionController {
	var $name = 'About';
	var $uses = array('About');

	function index(){ $this->set('item',$this->m[0]->find_(array('contain'=>$this->uses[0].'img'),'first')); }
	function admin_images(){
		$this->paginate[$this->uses[0].'img']['limit'] = 16;

		if(!empty($this->data)){
			if($return = $this->m[0]->saveAll($this->data,array('validate'=>true))){
				$msg = 'ok';
				if(is_array($return) && in_array(false,$return,true)){ $msg = 'some'; }
				$this->_flash('save_'.$msg);
			}
		}

		$this->data = $this->m[0]->find_(array('contain'=>false,'fields'=>array('id')),'first');
		$this->set('items',$this->paginate($this->uses[0].'img'));
		$this->set('itemtitle','Nosotros');
		
		$this->detour('elements/temp');
	}

}
?>