<?php
namespace App\Core\Routing;
use App\Core\Request;
class Router{
    private $request;
    private $routes;
    private $current_route;
    const BASECONTROLLER = '\App\Controllers\\';
    public function __construct()
    {
        $this->request=new Request;
        $this->routes=Route::routes();
        $this->current_route=$this->findRoute($this->request) ?? null;
        $this->run_route_middleware();
    }
    public function run_route_middleware()
    {
        $middleware = $this->current_route["middleware"];
        foreach ($middleware as $middleware_class) {
            $middleware_obj=new $middleware_class;
            $middleware_obj->handle();
        }
    }
    public function findRoute(Request $request){
        foreach ($this->routes as $route) {
            if(in_array($request->method(),$route['method']) && $request->uri() === $route["uri"]){
                return $route;
            }
        }
        
        return null;
    }
    public function run()
    {
        #405
        #404
        if(is_null($this->current_route)){
            $this->distpatch404();
            return null;
        }
        $this->distpatch($this->current_route);
        
    }
    public function distpatch404()
    {
        header("HTTP/1.1 404 Not Found");
        view("errors.404");
    }
    public function distpatch405()
    {
        header("HTTP/1.0 405 Method Not Allowed");
        view("errors.405");
    }
    public function distpatch($route)
    {
        $action=$route["action"];
        if(is_null($action) || empty($action)){
            return null;
        }
        #action : null
        #action : closure
        if(is_callable($action)){
            $action();
        }
        #action : Controller@method
        if(is_string($action)){
            $action=explode('@',$action);
        }
        if(is_array($action)){
            $class_name=self::BASECONTROLLER . $action[0];
            $method=$action[1];
            if(!class_exists($class_name)){
                throw new \Exception("class $class_name Not Exists");
            }
            $Controller = new $class_name();
            if(!method_exists($Controller,$method)){
                throw new \Exception("method $method Not Exists in class $class_name ");
            }
            $Controller->{$method}();
        }
        #action : ['controller','method']
    }
}