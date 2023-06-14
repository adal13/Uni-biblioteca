<?php
$con = new LibroController();

if (isset($_GET['requestBook'])) {

    if ($_GET['requestBook'] == 'listBook') {
        $con->showProduct();
    }
    if ($_GET['requestBook'] == 'insert') {
        $con->guardar();
    }
    if ($_GET['requestBook'] == 'update') {
        $con->update();
    }
    if ($_GET['requestBook'] == 'desactive') {
        $con->desactive();
        // echo "Probando ";
    }
    if ($_GET['requestBook'] == 'active') {
        $con->active();
        //echo "Probando ";
    }
}

//echo "conectando al controlador";
class LibroController
{

    private $model;
    public function __construct()
    {
        require_once("../models/function.php");
        $this->model = new bookModel();

        session_start();
        ob_start();
    }

    public function guardar()
    {

        $nombre = $_POST['nombre'];
        $volumen = $_POST['volumen'];
        $etiqueta = $_POST['etiqueta'];
        $autor = $_POST['autor'];


        //$id = $this->model->insertar($nombre);
        $res = $this->model->insertar($nombre, $volumen, $etiqueta, $autor);

        if ($res) {
            $con = new LibroController();
            $con->showProduct();
        }
    }
    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function showProduct()
    {
        $res = $this->model->showP();
        $_SESSION['data'] = $res;

        header("Location:../view/books.php");
    }

    public function eliminateBook()
    {
        $res = $this->model->showP();
        $_SESSION['data'] = $res;

        header("Location:../view/removed.php");
    }

    public function desactive()
    {
        $id = $_POST['id'];
        echo $id;
        $res = $this->model->desactive($id);
        if ($res) {
            $con = new LibroController();
            //echo "la consulta se reealizo satisfactoriamente";
            $con->showProduct();
        }
    }

    public function active()
    {
        $id = $_POST['id_libro'];
        $res = $this->model->active($id);

        if ($res) {
            $con = new LibroController();
            //echo "la consulta se reealizo satisfactoriamente";
            $con->eliminateBook();
        }
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update()
    {
        $id = $_POST['id_libro'];
        $nombre = $_POST['nombre'];
        $volumen = $_POST['volumen'];
        $etiqueta = $_POST['etiqueta'];
        $autor = $_POST['autor'];

        $res = $this->model->update($id, $nombre, $volumen, $etiqueta, $autor);

        if ($res) {
            $con = new LibroController();
            $con->showProduct();
        }
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=" . $id);
    }
}

?>