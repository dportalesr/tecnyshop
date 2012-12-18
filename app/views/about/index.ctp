<?php
echo $this->element('top');
if($item){
	echo
		$this->element('showcase',array('data'=>$item[$_m[0].'img'],'size'=>'236x','id'=>'portada')),
		$html->div('desc tmce',$item[$_m[0]]['descripcion'].'');
}
echo $this->element('pdfs');
?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>