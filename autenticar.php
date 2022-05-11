<?php 

require_once "conexao.php";

@session_start();

//AQUI SERÁ FEITO UMA VERIFICAÇÃO SE OS CAMPOS username OU senha estao vazios, caso esteja será direcionado para a pagina login
if(empty($_POST['username']) || empty($_POST['pass'])){
	echo "<script language='javascript'>window.location='index.php';</script>";
}
//==================================================

$usuario = $_POST['username'];
$senha = $_POST['pass'];

//AQUI SERAM SELECIONADOS TODOS OS DADOS DA TABELA USUARIO ONDE USUARIO E SENHA RECEBE OS DADOS QUE FORAM DIGITADOS NOS CAMPOS
$res = $pdo->prepare("SELECT * from usuarios where usuario = :usuario and senha = :senha");

//AQUI SAO PASSADO OS PARAMETROS E DEPOIS EXECUTADO
$res->bindValue(":usuario", $usuario);
$res->bindValue(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);
//=================================================
//AQUI ENCONTRADO RESULTADO NA TABELA USUARIO SERÁ CRIADO UMA VARIAVEL DE SESSAO E RECEBERÁ O DADOS PARA SER EXIBIDO NA TELA
if($linhas > 0){
	$_SESSION['id_usuario'] = $dados[0]['id'];
	$_SESSION['nome_usuario'] = $dados[0]['nome'];
	$_SESSION['nivel_usuario'] = $dados[0]['nivel'];
	$_SESSION['log_usuario'] = $dados[0]['usuario'];
	$_SESSION['local_usuario'] = $dados[0]['id_localidade'];
//=================================================

	if($_SESSION['local_usuario'] == 0 || $_SESSION['local_usuario'] == 1 || $_SESSION['local_usuario'] == 2){

		echo "<script language='javascript'>window.location='painel-adm/index.php';</script>";

		exit();
	}else if($_SESSION['local_usuario'] == 4){

		echo "<script language='javascript'>window.location='painel-adm-eqtl/index.php';</script>";

		exit();
	}else if($_SESSION['local_usuario'] == 5){

		echo "<script language='javascript'>window.location='painel-adm-eqtl/index.php';</script>";

		exit();
	}else if($_SESSION['local_usuario'] == 6){

		echo "<script language='javascript'>window.location='painel-adm-rs/index.php';</script>";

		exit();
		
	}else if($_SESSION['local_usuario'] == 7){

		echo "<script language='javascript'>window.location='painel-adm-rs/index.php';</script>";

		exit();

	}else if($_SESSION['local_usuario'] == 8 || $_SESSION['local_usuario'] == 13 || $_SESSION['local_usuario'] == 12 || $_SESSION['local_usuario'] == 11){

		echo "<script language='javascript'>window.location='painel-adm-eqtl/index.php';</script>";

		exit();
	}else if($_SESSION['local_usuario'] == 9 || $_SESSION['local_usuario'] == 10){

		echo "<script language='javascript'>window.location='painel-adm-eqtl/index.php';</script>";

		exit();
	}else if($_SESSION['local_usuario'] == 14 || $_SESSION['local_usuario'] == 15 || $_SESSION['local_usuario'] == 16){

		echo "<script language='javascript'>window.location='painel-adm-eqtl/index.php';</script>";

		exit();
	}else if($_SESSION['local_usuario'] == 17){

		echo "<script language='javascript'>window.location='painel-adm-eqtlma/index.php';</script>";

		exit();
	}else{

		echo "<script language='javascript'>window.alert('Localidade não Cadastrado!');</script>";
		echo "<script language='javascript'>window.location='index.php';</script>";

		exit();
	}	

}else{
	echo "<script language='javascript'>window.alert('Dados Incorretos!!');</script>";
	echo "<script language='javascript'>window.location='index.php';</script>";
}


?>