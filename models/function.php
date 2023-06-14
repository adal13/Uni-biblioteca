<?php
class bookModel
{
    private $PDO;

    public function __construct()
    {
        require_once("bd_biblio.php");
        $con = new db_biblioteca();
        $this->PDO = $con->conection_db();
    }

    public function insertar($nombre, $volumen, $etiqueta, $autor)
    {
        $stament = $this->PDO->prepare("INSERT INTO libros VALUES(0,:nombre, :volumen, :etiqueta, :autor, 1 ,now())");
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":volumen", $volumen);
        $stament->bindParam(":etiqueta", $etiqueta);
        $stament->bindParam(":autor", $autor);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id)
    {
        $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function showP()
    {
        $stament = $this->PDO->prepare("SELECT * FROM libros");
        // $stament->bindParam(":id",$id);
        //return ($stament->execute()) ? $stament->fetch() : false ;

        return ($stament->execute()) ? $stament->fetchAll() : false;

    }

    public function index()
    {
        $stament = $this->PDO->prepare("SELECT * FROM username");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id, $nombre, $volumen, $etiqueta, $autor)
    {
        $stament = $this->PDO->prepare("UPDATE libros SET 
                                                    nombre = :nombre, 
                                                    volumen = :volumen,
                                                    etiqueta = :etiqueta,
                                                    autor = :autor
                                                    /* fecha_creacion = now(), */
                                                    WHERE id_libro = :id_libro");

        $stament->bindParam(":id_libro", $id);
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":volumen", $volumen);
        $stament->bindParam(":etiqueta", $etiqueta);
        $stament->bindParam(":autor", $autor);

        return ($stament->execute());
    }

    public function desactive($id)
    {
        $stament = $this->PDO->prepare("UPDATE libros set estatus = 0 WHERE id_libro = :id_libro");
        $stament->bindParam(":id_libro", $id);
        return ($stament->execute()) ? true : false;
    }

    public function active($id)
    {
        $stament = $this->PDO->prepare("UPDATE libros set estatus = 1 WHERE id_libro = :id_libro");
        $stament->bindParam(":id_libro", $id);
        return ($stament->execute()) ? true : false;
    }
    public function delete($id)
    {
        $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true : false;
    }
}

?>