<?php
class ControllerIndex extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }
    public function main() {

        $this->data["namepage"] = "Home"; 
        $this->view->show("indexLogin.html", $this->data, $this->accion);

    }
}
?>
