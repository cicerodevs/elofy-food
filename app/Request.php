<?php

namespace App;

use Exception;
use App\Controller\IndexController;

class Request
{
    private $index;
    public function __construct()
    {
        $this->index = new IndexController();

    }
    public function handleRequest()
    {
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';

        try {
            if (!$controller || $controller == 'saveCSV') {
                $this->index->csv();
            }else if(!$controller || $controller == 'store'){
                $this->index->store();
            }else if(!$controller || $controller == 'update'){
                $this->index->update();
            }else if(!$controller || $controller == 'delete'){
                $this->index->delete();
            }else {
                $this->index->index();
            }
        } catch (Exception $e) {
            echo "Application error", $e->getMessage();
        }
    }
}
