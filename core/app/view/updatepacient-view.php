<?php

if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
	
	$user->usuarioResponsable = $_POST["usuario"];
	
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];

	$user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];
	
	$user->sick = $_POST["sick"];
	$user->medicaments = $_POST["medicaments"];
	$user->alergy = $_POST["alergy"];


	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];

    $user->rutpaciente = $_POST["rutpaciente"];
    $user->relacion = $_POST["relacion"];
    $user->comuna = $_POST["comuna"];
    $user->referencia = $_POST["referencia"];
    $user->contactodomicilio = $_POST["contactodomicilio"];
    $user->observacion = $_POST["observacion"];
    $user->estado = $_POST["estado"];

	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>