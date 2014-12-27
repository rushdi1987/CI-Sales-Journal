<?php 

if (!function_exists('js_url')) { 

function js_url($name) 
{ 
return base_url(ASSETS_DIR . $name . '.js'); 
} 
} 
if (!function_exists('js_tag')) { 

function js_tag($uri) 
{ 
return '<script type="text/javascript" src="' . $uri . '"></script>'; 
} 
} 




 ?>