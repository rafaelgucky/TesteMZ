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
            $routes["homePessoa"] = [
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
            $routes["updateSavePessoa"] = [
                "route" => "/pessoa/updatesave",
                "controller" => "indexController",
                "action" => "updateSave"
            ];
            $routes["deletePessoa"] = [
                "route" => "/pessoa/delete",
                "controller" => "indexController",
                "action" => "delete"
            ];
            $routes["homeContato"] = [
                "route" => "/contatos",
                "controller" => "contatosController",
                "action" => "index"
            ];
            $routes["createContato"] = [
                "route" => "/contatos/create",
                "controller" => "contatosController",
                "action" => "create"
            ];
            $routes["createSaveContato"] = [
                "route" => "/contatos/createSave",
                "controller" => "contatosController",
                "action" => "createSave"
            ];
            $routes["updateContato"] = [
                "route" => "/contatos/update",
                "controller" => "contatosController",
                "action" => "update"
            ];
            $routes["updateSaveContato"] = [
                "route" => "/contatos/updateSave",
                "controller" => "contatosController",
                "action" => "updateSave"
            ];
            $routes["deleteContato"] = [
                "route" => "/contatos/delete",
                "controller" => "contatosController",
                "action" => "delete"
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