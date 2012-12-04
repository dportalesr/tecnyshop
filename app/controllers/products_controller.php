<?php
App::import('Controller','_base/Categorizeditems');
class ProductsController extends CategorizeditemsController{
	var $name = 'Products';
	var $uses = array('Product','Category');

	function admin_export(){ $this->_export(array('nombre','precio','descripcion','Category.nombre')); }
	function novedades(){
		$items = $this->m[0]->find_(array('contain'=>array('Productimg'),'conditions'=>array('Product.category_id'=>2)));
		$this->set(compact('items'));
	}
}
?>