<?php
class ControllerIndex extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }
    public function main() {


        $sql="SELECT ct.categorias , COUNT(ct.categorias) AS nr FROM cursos AS cs INNER JOIN categorias AS ct ON ct.id=cs.id_categorias GROUP by ct.id";
        $this->data["categorias"] = indexModel::bd($this->conf)->getSQL($sql);
        //SELECT COUNT(categorias) AS nr, id AS idCategoria FROM categorias GROUP by id
        var_dump( $this->data["categorias"]);

        $sql="SELECT cs.*, ct.categorias FROM cursos AS cs  INNER JOIN categorias AS ct ON ct.id=cs.id_categorias ORDER by cs.fecha DESC";
        $this->data["dataCurso"] = indexModel::bd($this->conf)->getSQL($sql);

        $this->view->show("indexLogin.html", $this->data, $this->accion);

    }
}
?>
