<script>
		function borrar($id){
			$.post( "abmBorrar.php",{id:$id},
		function(respuesta){
				var url ="displayBuscarpaciente.php";
                $("#contenido").load(url);
	})
		}
		function modificar($id){
		$.post( "abmModificar.php",{id:$id},
		function(respuesta){
				var url ="displayBuscarpaciente.php";
                $("#contenido").load(url);
	})	
			//console.log("nombre"+$nombre);
		}
</script>
<?php

		
	function buscarPacientes(){
		$response="";
		$consulta="SELECT * FROM paciente";
		if (!(empty($_GET['dni']))){
			$consulta=$consulta." WHERE dni like ".$_GET["dni"]."";
		}
		if (!(empty($_GET['nombre']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE nombre like \"".$_GET["nombre"]."\"";
			}else{
				$consulta=$consulta." AND nombre like \"".$_GET["nombre"]."\"";
			}
		}
		if (!(empty($_GET['apellido']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE apellido like \"".$_GET["apellido"]."\"";
			}else{
				$consulta=$consulta." AND apellido like \"".$_GET["apellido"]."\"";
			}
		}
		
		$consulta=$consulta." ORDER BY id_paciente ASC";
		
		return $consulta;
	}
	
	
	$query=buscarPacientes();
	
	 include "../collection/CollectionPacientes.php";
	 include '../domain/DataBaseConnector.php';
	$generaGrilla=new CollectionPacientes();
	 $db=new DataBaseConnector();
	 
	 $db->conectar();
	 $generaGrilla->getTablePacientes($query);
?>
	
	


 