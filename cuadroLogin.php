<script type="text/javascript" src="static/js/irA.js"></script>
<table align="right">
		<tr> 
			<td>Bienvenido:<strong><?php echo $_SESSION['nombre'];echo(' ');echo $_SESSION['apellido']; ?></strong></td>
		</tr>
		<tr>
			<td>Usuario : <?php echo $_SESSION['usuario'];?></td>
		</tr>
		<tr>
			<td><?php echo $_SESSION['rol'];?></td>
		</tr>
	
		<tr>
			<td><INPUT type="button" value="Cerrar Sesion" width="30px" onClick="location='/EDII-III-CLINICAS/php/EliminarSesion.php';"/>
			<INPUT type="button" value="Cambiar Contraseņa" onClick="irA(12)"/> 
			<INPUT type="button" value="Mod Datos" onClick="irA(13)"/> 
			</td>
		</tr>
	
</table>