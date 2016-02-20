<?php
include_once 'classes/Medicos.php';
include_once 'classes/Pacientes.php';
include_once 'classes/Consultas.php';

//logica da consulta
$consultas = (new Consultas);
$consultas->setNumeroConsulta();
$numeroConsulta = $consultas->getNumeroConsulta();

//Logica do paciente
$pacientes = new Pacientes;
$pacientes->setNomePaciente('4 Linux');
$pacientes->setNumeroConsulta($numeroConsulta);
$impressaoDoutor = $pacientes->getFixa();

//Logica do medico
$medico = new Medicos;
$medico->obtemFicha($impressaoDoutor);
$impressaoDoMedicoEmTela->$medico->lerDadosPacientes();

?>

<html>
	<head>
		<title>:::Sistema de Atendimento 4linux :::</title>
	</head>
	<body>
		<table width="100%" border="1">
			<tr height="60" align="center">
				<td>Senhor Medico:
					Joaquim sei la o senhor
					ira atender o paciente:
				</td>
			</tr>
			<tr height="60" aling="center">
				<td>
					<?php echo $impressaoDoMedicoEmTela;?>
				</td>
			</tr>	
		</table>
	</body>
</html>