<?php

use PhpParser\Node\Stmt\Echo_;

class ControllerDetallecurso extends Controller {
    function __construct($view, $conf, $var, $acc) {
        parent::__construct($view, $conf, $var, $acc);
    }
     public function main() {

        foreach ($this->var as $key => $value) {
            $this->data[$key] = $value;
            $$key = $value;
        }
        
        $dd = explode('/',$this->var["con"]);
        $idReg = $dd[1];

        //--> Detaalles de articulos
        $sql='SELECT cs.*, ct.categorias, DATE_FORMAT(cs.fecha, "%b %e, %Y") AS date2,u.name,u.id AS idUser ,u.caracteristicas FROM cursos AS cs 
        INNER JOIN categorias AS ct ON ct.id=cs.id_categorias 
        INNER JOIN user AS u ON u.id=cs.id_user WHERE cs.id='.$idReg.' ORDER by cs.fecha DESC';
        $this->data["detalles"] = indexModel::bd($this->conf)->getSQL($sql)[0];
      

        //--> Artículos Relacionados
        $sql= 'SELECT id, DATE_FORMAT(fecha,"%e") AS day, DATE_FORMAT(fecha,"%b") AS month, curso, descripcion FROM cursos 
            WHERE id_categorias='.$this->data["detalles"]->id_categorias.' ORDER BY id DESC LIMIT 4';
        $this->data["postpopular"] = indexModel::bd($this->conf)->getSQL($sql);


        $this->view->show("detallecurso.html", $this->data, $this->accion);
    }
}
?>
