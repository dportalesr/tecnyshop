<?php
App::import('Controller','_base/Categorizeditems');
class ProductsController extends CategorizeditemsController{
	var $name = 'Products';
	var $uses = array('Product','Category','Order','Orderdetail');

	function index(){
		$this->m[0]->recursive = -1;
		$this->paginate[$this->uses[0]]['recursive'] = -1;
		$this->paginate[$this->uses[0]]['fields'] = array('id','nombre','slug','precio','stock','tipo_etiqueta');
		$this->paginate[$this->uses[0]]['contain'] = array(
			'Type'=>array('id','nombre','slug','precio','stock'),
			$this->uses[0].'portada',
			'Category'=>array('fields'=>array('id','slug','nombre'))
		);

		parent::index(true);
	}
	
	/** Cart functions **/
	
	function remove(){ $this->Cart->remove(); }
	function add2cart(){ $this->Cart->add2cart(); }
	function checkout(){ $this->Cart->checkout(); }
	function finalizado(){ $this->Cart->docheckout(); }
	function updateqty(){ $this->Cart->updateqty(); }
	function cancelado(){ $this->render('/productos/finalizado'); }
	function setcheckout(){ $this->Cart->setcheckout(); }

	/********************/

	function admin_agregar(){
		parent::admin_agregar();

		$currencies = $this->m[0]->Currency->find_(array(),'list');
		$this->set(compact('currencies'));
	}
	
	function admin_editar($id){
		$noPost = empty($this->data);

		if($noPost) $data = $this->m[0]->find_(array($id,'contain'=>array('Type')));

		parent::admin_editar($id);

		if($noPost) $this->data['Type'] = $data['Type'];
	
		$currencies = $this->m[0]->Currency->find_(array(),'list');
		$this->set(compact('currencies'));
	}

	function admin_export(){ $this->_export(array('nombre','precio','descripcion','Category.nombre')); }
	function test(){
		$test_data = array(
			'Buyer' =>array(
				'id'=>null,
				'nombre' =>'Invitado',
				'created' =>date('d-m-Y H:i:s')
			),
			'items' =>array(
				'6_17' =>array(
					'Product' =>array(
						'id' =>6,
						'nombre' =>'Vivamus facilisis tristique augue',
						'slug' =>'6_vivamus-facilisis-tristique-augue',
						'precio' =>50.00
					),
					'Productportada' =>array(
						'src' =>'upload/img1213490819561.jpg'
					),
					'Type' =>array(
						'id' =>17,
						'nombre' =>'medium',
						'precio' =>50.00,
					),
					'qty' =>1
				),
				'6_16' =>array(
					'Product' =>array(
						'id' =>6,
						'nombre' =>'Vivamus facilisis tristique augue',
						'slug' =>'6_vivamus-facilisis-tristique-augue',
						'precio' =>120.00
					),
					'Productportada' =>array(
						'src' =>'upload/img1213490819561.jpg'
					),
					'Type' =>array(
						'id' =>16,
						'nombre' =>'small',
						'precio' =>null
					),
					'qty' =>2
				),
				'5_15' =>array(
					'Product' =>array(
						'id' =>5,
						'nombre' =>'Fusce quis lorem eget purus',
						'slug' =>'5_fusce-quis-lorem-eget-purus',
						'precio' =>30.00
					),
					'Productportada' =>array(
						'src' =>null
					),
					'Type' =>array(
						'id' =>15,
						'nombre' =>'medium',
						'precio' =>30.00,
					),
					'qty' =>2
				),
				4 =>array(
					'Product' =>array(
						'id' =>4,
						'nombre' =>'Mauris justo libero, varius pretium congue a, posuere consectetur leo.',
						'slug' =>'4_mauris-justo-libero-varius-pretium-congue-a-posuere-consectetur-leo',
						'precio' =>500.00
					),
					'Productportada' =>array(
						'src' =>null
					),
					'Type' =>null,
					'qty' =>4
				),
				'1_2' =>array(
					'Product' =>array(
						'id' =>1,
						'nombre' =>'Aliquam sit amet ipsum lorem',
						'slug' =>'1_aliquam-sit-amet-ipsum-lorem',
						'precio' =>50.00
					),
					'Productportada' =>array(
						'src' =>null
					),
					'Type' =>array(
						'id' =>2,
						'nombre' =>'small',
						'precio' =>50.00
					),
					'qty' =>1
				),
				'1_4' =>array(
					'Product' =>array(
						'id' =>1,
						'nombre' =>'Aliquam sit amet ipsum lorem',
						'slug' =>'1_aliquam-sit-amet-ipsum-lorem',
						'precio' =>200.00
					),
					'Productportada' =>array(
						'src' =>null
					),
					'Type' =>array(
						'id' =>4,
						'nombre' =>'large',
						'precio' =>null
					),
					'qty' =>3
				)
			)
		);

		$this->Session->write('cart',$test_data);
		$this->redirect(array('action'=>'checkout'));
	}	
}
?>