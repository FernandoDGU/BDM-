<?php 
session_start();
// require("../Connection_db/classConecction.php");

// $newConn = new ConnectionMySQL();
// $newConn->CreateConnection();
$categoriaNomSelect = $_POST["Seleccionado"];
$idCategoriaSelect = $_POST["idSeleccionado"];
echo "<li class='itemCategoria'>
    <input  type='text' value=".$idCategoriaSelect." >
    <a class='EliminarCategoria' onclick = 'EliminarCategoria(this)'> x </a> 
    <h6 class= 'nombreCateg'>" .$categoriaNomSelect . "</h6>
    </li>";
//Validacion que no se repita el mismo nombre
?>