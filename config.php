<?

// ---------------------------------------------------------------------
// autenticación de usuario
// --------------------------------------------------------------------- 

function autoriza_usuario()
{	
	$id_usuario = $_SESSION['id_usuario'];
	if(strlen($id_usuario) == 0)
	{
		echo "<script>location.href='http://www.institutomardecortes.edu.mx/sistema_escolar/login.php'</script>";
	}
}


// ---------------------------------------------------------------------
// variables de conexión DB
// --------------------------------------------------------------------- 

$servidor ="localhost";
$usuarioDB = "institut_imcweb";
$passDB = "Power210";
$DB = "institut_imcweb";

?>