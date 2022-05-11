<?php 
@session_start();

require_once "config.php";

date_default_timezone_set('America/Belem');

try{
	$pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");
} catch (Exception $e) {
	echo "Erro ao conectar com o banco de dados! ".$e;
}


//$nivel = $_SESSION['nivel_usuario'];
@$log_nome = $_SESSION['nome_usuario'];
@$log_user = $_SESSION['log_usuario'];

//VARIAVEL PARA OCULTAR DADOS
@$dnone_ocultar = 'd-none';



@$res_usuario = $pdo->query("SELECT * from usuarios where nome = '$log_nome'");
@$dados_usuario = $res_usuario->fetchAll(PDO::FETCH_ASSOC);
@$nome_usuario = $dados_usuario[0]['nivel'];
@$mat_usuario = $dados_usuario[0]['usuario'];
@$local_usuario = $dados_usuario[0]['id_localidade'];



@$res_local = $pdo->query("SELECT * from localidade where id = '$local_usuario'");
@$dados_local = $res_local->fetchAll(PDO::FETCH_ASSOC);
@$nome_regiao = $dados_local[0]['regiao'];
@$nome_polo = $dados_local[0]['polo'];





$mat_2 = 'admin';
$mat_1 = 'u19230';

if(@$nome_usuario != @$nivel_master){
	@$dnone_nivel = 'd-none';
}
if(@$nome_usuario != @$nivel_master_ma){
	@$dnone_nivel_ma = 'd-none';
}
if(@$nome_usuario != @$nivel_master_al_le){
	@$dnone_nivel_al_le = 'd-none';
}
if(@$nome_usuario != $nivel_assistent and @$nome_usuario != @$nivel_master){
	@$dnone_assistent = 'd-none';
}
if(@$nome_usuario != @$nivel_fiscal and @$nome_usuario != @$nivel_assistent  AND @$nome_usuario != @$nivel_master_ma AND @$nome_usuario != @$nivel_master_al_le and @$nome_usuario != @$nivel_superv_bx and @$nome_usuario != @$nivel_fiscal_pros and @$nome_usuario != @$nivel_master){
	@$acesso_alvo = 'd-none';
}
if(@$nome_usuario != $nivel_back_ret and @$nome_usuario != $nivel_superv_bx and @$nome_usuario != $nivel_assistent and @$nome_usuario != @$nivel_master){
	@$dnone_back_ret_super_bx = 'd-none';	
}
if(@$nome_usuario != $nivel_back_ret and @$nome_usuario != @$nivel_assistent and @$nome_usuario != @$nivel_master){
	@$dnone_back_ret = 'd-none';	
}
if(@$nome_usuario == $nivel_backoffice_adm){
	@$dnone_backoffice_adm = 'd-none';
}
if(@$nome_usuario == $nivel_adm_backoffice){
	@$dnone_adm_backoffice = 'd-none';
}
if(@$mat_usuario != @$mat_1 and @$mat_usuario != @$mat_2){
	@$dnone_conf = 'd-none';
}
if(@$nome_usuario != @$nivel_backoffice_adm and @$nome_usuario != @$nivel_back_ret and @$nome_usuario != $nivel_assistent and @$nome_usuario != @$nivel_master and @$nome_usuario != @$nivel_back_rel_adm){
	@$dnone_lancar = 'd-none';
}
if(@$nome_usuario != @$nivel_superv_bx and @$nome_usuario != @$nivel_master){
	@$dnone_superv_bx = 'd-none';
}
if(@$nome_usuario != @$nivel_superv_bx and @$nome_usuario != @$nivel_backoffice_bx and @$nome_usuario != @$nivel_master){
	@$dnone_bx = 'd-none';
}
if(@$nome_usuario != @$nivel_fiscal and @$nome_usuario != @$nivel_fiscal_pros and @$nome_usuario != @$nivel_assistent  AND @$nome_usuario != @$nivel_master_ma AND @$nome_usuario != @$nivel_master_al_le and @$nome_usuario != @$nivel_master){
	@$dnone_fs = 'd-none';
}
if(/*@$nome_usuario != @$nivel_fiscal and */@$nome_usuario != @$nivel_fiscal_pros and @$nome_usuario != @$nivel_equipe_perda and @$nome_usuario != @$nivel_assistent AND @$nome_usuario != @$nivel_master AND @$nome_usuario != @$nivel_master_ma AND @$nome_usuario != @$nivel_master_al_le){
	@$dnone_eq = 'd-none';
}
if(@$nome_usuario != @$nivel_fiscal_pros AND @$nome_usuario != @$nivel_master){
	@$dnone_fs_pros = 'd-none';
}
if(@$nome_usuario != @$nivel_fiscal AND @$nome_usuario != @$nivel_assistent AND @$nome_usuario != @$nivel_master AND @$nome_usuario != @$nivel_master_ma AND @$nome_usuario != @$nivel_master_al_le){
	@$dnone_fs_2 = 'd-none';
}
if(@$nome_usuario != @$nivel_assistent AND @$nome_usuario != @$nivel_master AND @$nome_usuario != @$nivel_master_ma AND @$nome_usuario != @$nivel_master_al_le AND @$nome_usuario != @$nivel_prosp AND @$nome_usuario != @$nivel_fiscal){
	@$acesso_prospeccao = 'd-none';
}
if(@$nome_usuario == $nivel_prosp){
	@$nao_acesso_prosp = 'd-none';
}

?>