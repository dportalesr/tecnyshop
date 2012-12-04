<div class="sidebar">
<div class="pad">
<?php
if($items = Cache::read('category_product_recent')){
	echo $html->tag('ul',null,'recursive_list');

	foreach($items as $item){
		$li_class = '';
		$novedades = false;
		$category_url = 'javascript:;';

		if($item['Category']['id']==2) {
			$novedades = true;
			$li_class = 'novedades';
			$category_url = array('controller'=>'products','action'=>'novedades');
		}

		echo
			$html->tag('li',null,$li_class),
				$html->link($item['Category']['nombre'],$category_url);

			if(!($novedades || empty($item['Product']))){
				echo $html->tag('ul');

				foreach($item['Product'] as $it){
					$selected = isset($this->passedArgs[0]) && $it['slug'] == $this->passedArgs[0] ? 'selected' : '';
					echo $html->tag('li',$html->link($it['nombre'],array('controller'=>'products','action'=>'ver','category'=>$item['Category']['slug'],'id'=>$it['slug'])),$selected);
				}

				echo '</ul>';
			}

		echo '</li>';
	}

	echo '</ul>';
}
?>
</div>
</div>