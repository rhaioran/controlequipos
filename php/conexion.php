<?php
function conectar()
{
	mysqli_connect("localhost", "root", "",'inventarioemi');
	mysqli_select_db("inventarioemi");
}

function desconectar()
{
	mysqli_close();
}
?>