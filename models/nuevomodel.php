<?php
class NuevoModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function insert($datos)
  {
    //insertar datos db
    $query = $this->db->connect()->prepare("INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDO) VALUES (:matricula, :nombre, :apellido)");
    $query->execute([
      "matricula" => $datos["matricula"],
      "nombre" => $datos["nombre"],
      "apellido" => $datos["apellido"]
    ]);
    echo "<p>Insertar Datos</p>";
  }
}
