<?php
function link_to($path, $name, $options=''){
	if (substr($path, 0, 1) == '/') {
		return '<a href="'.SITE_ROOT.$path.'"'.$options.'>'.$name.'</a>';
	}
	return '<a href="'.$path.'"'.$options.'>'.$name.'</a>';
}

function redirect_if_not_post() {
  $params = func_get_args();

  foreach($params as $param){
    if (!isset($_POST[$param])){
      header("location: index.php");
      exit();
    }
  }
}

function include_stylesheets_tag(){
	$params = func_get_args();
	$path = ASSETS_FOLDER."css/";

	foreach($params as $param)
		echo '<link href="'.$path.$param.'" rel="stylesheet">';	

}

function include_javascripts_tag(){
	$params = func_get_args();
	$path = ASSETS_FOLDER."js/";

	foreach($params as $param)
		echo '<script src="'.$path.$param.'"></script>';

}
?>
