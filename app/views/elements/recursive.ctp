<?php
$model = ucfirst(empty($model) ? $_m[0] : $model);
$header = empty($header) ? false : $header;
$class = empty($class) ? 'recursive_list' : $class;
$current = empty($current) ? false : $current;
$leafs_only = empty($leafs_only) ? false : $leafs_only;
$action = empty($action) ? 'ver' : $action;
$route_param = empty($route_param) ? false : $route_param;

$belongs = ucfirst(empty($belongs) ? $model : $belongs);
$filter = empty($filter) ? false : $filter;

if($model && $items = Cache::read(strtolower($model).'_recursive')){
	
	echo
		$html->div('recent');
		
		if($header)
			echo $html->div('title title2',$header);
			
		echo $util->recursivelist($items,compact('current','model','belongs','leafs_only','class','route_param','action'),$filter),
	'</div>';
}
?>