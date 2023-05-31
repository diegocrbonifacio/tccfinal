<?php
	include("config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO usuarios 
						(nome, localacao, valor, quantidade)
					VALUES
						('".$_POST["nome"]."','".$_POST["localacao"]."','".$_POST["valor"]."','".$_POST["quantidade"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE usuarios SET
						nome='".$_POST["nome"]."',
						localacao='".$_POST["localacao"]."',
						valor='".$_POST["valor"]."',
						quantidade='".$_POST["quantidade"]."'
					WHERE
						id=".$_POST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;
	}
?>