<?php
class Err extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->mensaje = "Error genérico";
    $this->view->render("err/index");

    echo "<p>Nuevo controlador Error</p>";
  }
}
