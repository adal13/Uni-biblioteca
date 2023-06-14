<!-- Models -->

<?php

    class book{
        private $mysqli;
        
        public function __construct()
        {
            $this->mysqli = new mysqli('localhost','root','','biblioteca');
        }

        public function getBooks(){
            $query = $this->mysqli->query('SELECT * FROM libros');

            $retorno = [];
            
            $i = 0;
            while ($row = $query->fetch_assoc()){
                $retorno[$i] = $row;
                $i++;
            }
            return $retorno;
        }

        public function insertBook($data){

            $query= "INSERT INTO libros (id_libro, nombre, volumen, etiqueta, autor, estatus, fecha_creacion) VALUES (?,?,?,?,?,?,?)";
            $statement = $this->mysqli->prepare($query);
            $statement->bind_param('sis', $data['nombre'], $data['volumen'], $data['etiqueta'], $data['autor']);


            $statement->execute();
            $statement->close();

            // $query = "INSERT INTO tabla (campo1, campo2, campo3) VALUES (?, ?, ?)";
        // $statement = $this->db->prepare($query);
        // $statement->bind_param('sss', $data['valor1'], $data['valor2'], $data['valor3']);
        // $statement->execute();
        // $statement->close();
        }
    }

?>

<!-- Views -->

<?php

            require_once '../models/function.php';
            require_once '../controllers/controllers.view.php';
            // require_once 'view.php';

            $controller = new libroController($modal);
            // $view = new view();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'nombre' => $_POST['nombre'],
                    'volumen' => $_POST['volumen'],
                    'etiqueta' => $_POST['etiqueta'],
                    'autor' => $_POST['autor'],
                ];
                $controller->insert($data);
            } else {
                // $view->showForm();
            }

        ?>

<!-- Controllers -->
<?php 
    class libroController{
            
            private $modal;
            public function __construct($modal)
            {
                // require('C:/xampp/htdocs/cursos/practica1/models/function.php');
                $this->modal = $modal;
            }

            public function insert ($data){
                $nombre=$_POST['nombre'];
                $volumen=$_POST['volumen'];
                $etiqueta=$_POST['etiqueta'];
                $autor=$_POST['autor'];

                $this->modal->insertBook($data);

                echo $nombre;
            }
        }
?>