 <?php
 
$url = ( isset($_GET["url"]) ) ? $_GET["url"] : "Index/index";
$url = explode("/", $url);

$controller = ( isset($url[0]) ) ? $url[0] . "_controller" : "Index_controller";
$method = ( isset($url[1]) && $url[1] != null ) ? $url[1] : "index";
$params = ( isset($url[2]) && $url[2] != null ) ? $url[2] : null;

$path = "./controllers/" . $controller . ".php";

if (file_exists($path)) {
    require $path;
    
    $controller = new $controller();
    
    if (method_exists($controller, $method)) {
        if ($params != null) {
            $controller->{$method}($params);
        } else {
            $controller->{$method}();
        }
    } else {
        $title = "Error 404: Method not found";
        $notFound = true;
    }
} else {
    $title = "Error 404: Controller Not Found";
    $notFound = true;
}

if(isset($notFound)){
    $index = "Index_Controller";
    $path = "./controllers/" . $index . ".php";
    require $path;
    $controller = new $index();
    $controller->notFound($title);
}