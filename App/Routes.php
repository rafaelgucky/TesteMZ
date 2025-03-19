<?php
    namespace App;

    class Routes
    {
        private $routes;

        public function __construct() {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes()
        {
            return $this->routes;
        }

        public function setRoutes(array $routes)
        {
            $this->routes = $routes;
        }

        public function initRoutes()
        {
            $routes["home"] = [
                "route" => "/",
                "controller" => "indexController",
                "action" => "index"
            ];
            $routes["createPessoa"] = [
                "route" => "/pessoa/create",
                "controller" => "indexController",
                "action" => "create"
            ];
            $routes["updatePessoa"] = [
                "route" => "/pessoa/update",
                "controller" => "indexController",
                "action" => "update"
            ];
            $routes["updatePessoaSave"] = [
                "route" => "/pessoa/updatesave",
                "controller" => "indexController",
                "action" => "updateSave"
            ];
            $routes["deletePessoa"] = [
                "route" => "/pessoa/delete",
                "controller" => "indexController",
                "action" => "delete"
            ];
            $routes["people"] = [
                "route" => "/people",
                "controller" => "peopleController",
                "action" => "index"
            ];
            $routes["contact"] = [
                "route" => "/contact",
                "controller" => "contactController",
                "action" => "index"
            ];
            $this->setRoutes($routes);
        }

        public function run($url)
        {
            foreach($this->getRoutes() as $routes)
            {
                if($routes["route"] == $url)
                {
                    $class = "App\\Controllers\\" . ucfirst($routes["controller"]);
                    $controller = new $class;
                    $action = $routes["action"];
                    $controller->$action($_POST);
                }
            }
            
        }

        public function getUrl()
        {
            return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        }
    }
?>