<?php
if(empty($cart_flash)) $cart_flash = 'Se ha cancelado el proceso de compra.';
$cart_flash = (array)$cart_flash;
$isError = empty($isError) ? false : $isError;

echo
	$this->element('top');

	if($isError)
		echo $html->para('cancelled_msg','El proceso de pago no ha podido completarse debido a los siguientes problemas:');

	foreach($cart_flash as $fl){
		echo $html->para($isError ? 'warning':'win',$fl);
	}
	
	echo $html->para(null,'Haga '.$html->link('click aquí',array('controller'=>'products','action'=>'index')).' para regresar al catálogo de Productos.');
?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>