<?php
class IndexController {

    public function handleRequest(string $action="index", array $params=null) {
        switch ($action) {

            case "index":
                $this->index();
                break;
            default:
                break;
        }
    }
    private function index() {
        include Router::getSourcePath()."views/pageSearch.inc.php";
    }



}